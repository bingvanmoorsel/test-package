<?php
/**
 * Created by PhpStorm.
 * User: jrantwijk
 * Date: 23-2-2015
 * Time: 13:35
 */

namespace VictoryCms\TestPackage;


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
        echo 'install';
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