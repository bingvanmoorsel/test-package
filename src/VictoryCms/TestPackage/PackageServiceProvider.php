<?php namespace VictoryCms\Testpackage;

use VictoryCms\Core\Providers\PackageServiceProvider as ServiceProvider;
use VictoryCms\Testpackage\Http\Controllers\HomeController;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/../../../resources/views/', 'victory.testpackage');
    }

    public function boot()
    {

//        dd(new HomeController());
        include_once(__DIR__.'/Http/routes.php');
    }

    public function install()
    {
        echo 'install test package';
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