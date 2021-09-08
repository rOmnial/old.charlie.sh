<?php

declare(strict_types=1);

namespace App\Transporter\Requests;

use Illuminate\Http\Client\PendingRequest;
use JustSteveKing\Transporter\Request;

abstract class FathomRequest extends Request
{
    protected string $method = 'GET';

    protected string $baseUrl = 'https://api.usefathom.com/v1/';

    public function authenticate(): self
    {
        $this->request->withToken(
            token: config('fathom.token'),
        )->withHeaders(
            headers: [
                'Accept' => 'application/json',
            ]
        )->withUserAgent(
            userAgent: "chazza",
        );

        return $this;
    }
}
