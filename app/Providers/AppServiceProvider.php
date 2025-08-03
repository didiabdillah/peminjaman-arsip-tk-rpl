<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Blade;
use App\View\Components\Public\PageHeader;
use App\View\Components\Public\Breadcrumb;


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
        Blade::component('page-header', PageHeader::class);
        Blade::component('breadcrumb', Breadcrumb::class);

        //timezone
        date_default_timezone_set('Asia/Jakarta');
    }
}
