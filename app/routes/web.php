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

$router->get('/Welcome', function () use ($router) {
    return 'Hello Michel, ba en fait j\'ai l\'impression de faire le "hackathon" bis, c\'est cool ' ;
});
