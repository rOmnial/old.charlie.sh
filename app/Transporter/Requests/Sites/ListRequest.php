<?php

declare(strict_types=1);

namespace App\Transporter\Requests\Sites;

use App\Transporter\Requests\FathomRequest;

class ListRequest extends FathomRequest
{
    protected string $path = 'sites';
}
