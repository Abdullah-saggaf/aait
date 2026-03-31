<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Force HTTPS in production (for Render.com and other reverse proxies)
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        RateLimiter::for('web', function (Request $request) {
            return Limit::perMinute((int) config('app.rate_limit.web_per_minute', 120))
                ->by($request->user()?->id ?: $request->ip());
        });

        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute((int) config('app.rate_limit.api_per_minute', 60))
                ->by($request->user()?->id ?: $request->ip());
        });

        RateLimiter::for('contact', function (Request $request) {
            return Limit::perMinute((int) config('app.rate_limit.contact_per_minute', 10))
                ->by($request->ip());
        });
    }
}
