<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Trust proxy headers from configured infrastructure.
        $middleware->trustProxies(at: env('TRUSTED_PROXIES', '*'));

        // Apply secure headers to all app responses.
        $middleware->append(App\Http\Middleware\SecurityHeaders::class);

        // Apply named global throttles for browser and API traffic.
        $middleware->web(append: ['throttle:web']);
        $middleware->api(prepend: ['throttle:api']);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
