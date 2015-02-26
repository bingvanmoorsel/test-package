<?php namespace VictoryCms\TestPackage;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        echo 'register';
    }

    public function boot()
    {
        echo 'boot';
    }

    public function install()
    {
        var_dump(\App::make('artisan'));
    }

    public function update()
    {
        echo 'update';
    }

    public function destroy()
    {
        echo 'destroy';
    }
}