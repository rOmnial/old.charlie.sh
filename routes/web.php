<?php

use App\Transporter\Requests\Sites\AggregationRequest;
use App\Transporter\Requests\Sites\CurrentVisitorsRequest;
use App\Transporter\Requests\Sites\ListRequest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $sites = [];
    if(Cache::get('site-pages')) {
        $sites = Cache::get('site-pages');
    } else {
        $sites = ListRequest::build()
            ->authenticate()
            ->send()
            ->json('data');
        Cache::add('sites', $sites, now()->addMinutes(5));
    }

    $liveVisitors = 0;
    if (Cache::get('total-visitors')) {
        $liveVisitors = Cache::get('total-visitors');
    } else {
        foreach ($sites as $site) {
            $siteData = CurrentVisitorsRequest::build()
                ->authenticate()
                ->siteId($site['id'])
                ->send()
                ->json();
            $liveVisitors += $siteData['total'];
        }
        Cache::add('total-visitors', $liveVisitors, now()->addMinutes(5));
    }

    $totalViews = 0;
    if (Cache::get('total-views')) {
        $totalViews = Cache::get('total-views');
    } else {
        foreach ($sites as $site) {
            $siteData = AggregationRequest::build()
                ->authenticate()
                ->siteId($site['id'])
                ->dateFrom(now()->subDays(30)->toDateTimeString())
                ->dateTo(now()->toDateTimeString())
                ->aggregates('pageviews')
                ->entity('pageview')
                ->send()
                ->json();
            $totalViews += $siteData[0]['pageviews'];
        }
        Cache::add('total-views', $totalViews, now()->addMinutes(5));
    }

    return view('welcome', compact('liveVisitors', 'totalViews'));
});
