<?php
namespace Lrvl\DashboardApp;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;

class DashboardAppProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        include __DIR__.'/routes/web.php';
        $this->loadViewsFrom(__DIR__.'/resources/views', 'files');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([__DIR__.'/public' => public_path('vendor/lrvl/files')], 'public');
        View::share('filesApp', [
            'name' => 'Files',
            'slug' => 'files',
            'icon' => [
                "type" => "font-awesome",
                "value" => "fas fa-folder"
            ]
        ]);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}