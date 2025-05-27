<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // other properties/methods...

    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'authCheck' => \App\Http\Middleware\AuthCheck::class,
    ];
}
