<?php

namespace Gillyware\Atlas\Providers;

use Gillyware\Atlas\Contracts\TimezoneServiceInterface;
use Gillyware\Atlas\Services\AtlasService;
use Gillyware\Atlas\Services\TimezoneService;
use Illuminate\Support\ServiceProvider;

class AtlasServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(TimezoneServiceInterface::class, TimezoneService::class);

        $this->app->singleton('atlas', fn ($app) => $app->make(AtlasService::class));
    }

    public function boot(): void {}
}
