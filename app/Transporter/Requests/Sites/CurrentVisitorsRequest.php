<?php

declare(strict_types=1);

namespace App\Transporter\Requests\Sites;

use App\Transporter\Requests\FathomRequest;
use Illuminate\Http\Client\PendingRequest;
use JustSteveKing\Transporter\Request;

class CurrentVisitorsRequest extends FathomRequest
{
    protected string $path = 'current_visitors';

    function siteId(string $site_id)
    {
        $this->withQuery(['site_id' => $site_id]);
        return $this;
    }
}
