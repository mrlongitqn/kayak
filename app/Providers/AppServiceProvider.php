<?php

namespace App\Providers;

use App\Models\Config;
use App\Models\CustomLink;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $collections = CustomLink::where('category_id',1)->get();
        $services = CustomLink::where('category_id',2)->get();
        $config_data = Config::first();
        View::share('tour_collections', $collections);
        View::share('tour_services', $services);
        View::share('config_data', $config_data);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
