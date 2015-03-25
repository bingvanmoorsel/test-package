<?php

$this->routes(function($router){

    $router->get('/', 'VictoryCms\TestPackage\Http\Controllers\HomeController@index');

});