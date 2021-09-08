<?php

declare(strict_types=1);

namespace App\Transporter\Requests\Sites;

use App\Transporter\Requests\FathomRequest;
use Illuminate\Http\Client\PendingRequest;
use JustSteveKing\Transporter\Request;

class AggregationRequest extends FathomRequest
{
    protected string $path = 'aggregations';

    function siteId(string $site_id)
    {
        $this->withQuery(['entity_id' => $site_id]);
        return $this;
    }

    function entity(string $entity)
    {
        $this->withQuery(['entity' => $entity]);
        return $this;
    }

    function aggregates(string $aggregates)
    {
        $this->withQuery(['aggregates' => $aggregates]);
        return $this;
    }

    function dateFrom(string $date_from)
    {
        $this->withQuery(['date_from' => $date_from]);
        return $this;
    }

    function dateTo(string $date_to)
    {
        $this->withQuery(['date_to' => $date_to]);
        return $this;
    }
}
