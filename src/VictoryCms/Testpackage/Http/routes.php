<?php

/*
 * When creating a route its relative to the root of this package:
 * http://<YourBaseUrl>/victory/victory-cms/test-package
 */
$this->routes(function($router){

    $router->get('/', 'VictoryCms\TestPackage\Http\Controllers\HomeController@index');

});


/*
 * When creating a route outside of your own package you register the routes to the victory routes:
 * http://<YourBaseUrl>/victory/test
 */
$this->app->victory->routes('test', function($router){
    $router->get('/', 'VictoryCms\TestPackage\Http\Controllers\HomeController@index');
});