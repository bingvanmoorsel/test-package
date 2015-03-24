<?php

$this->routes(function($router){

    $router->get('/', 'VictoryCms\Testpackage\Http\Controllers\HomeController@index');

});