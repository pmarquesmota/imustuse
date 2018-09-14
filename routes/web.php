<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('api/url', 'UrlController@index');
$router->post('api/url', 'UrlController@store');
$router->delete('api/url/{id}', 'UrlController@destroy');

$router->get('api/category', 'CategoryController@index');
$router->post('api/category', 'CategoryController@store');
$router->delete('api/category/{id}', 'CategoryController@destroy');
