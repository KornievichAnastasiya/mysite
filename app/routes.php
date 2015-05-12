<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array(
    'as' => 'home',
    'uses' => 'IndexController@getIndex'
));

Route::resource('planets', 'PlanetsController');

Route::controller('users', 'UsersController');

Route::controller('password', 'RemindersController');

Route::get('/language/{locale}', [
    'as' => 'language',
    'uses' => 'HomeController@language',
]);

Route::group([
    'namespace' => 'admin',
    'before' => 'auth',
], function () {
    Route::get('admin_test', [
        'as' => 'test',
        'uses' => 'AdminController@test',
    ]);

    Route::get('admin/control', [
        'as' => 'admin_control',
        'uses' => 'AdminController@index',
    ]);
    Route::get('admin/sectors', [
        'as' => 'admin_sectors_show',
        'uses' => 'SectorController@index',
    ]);

    Route::get('admin/stars', [
        'as' => 'admin_stars_show',
        'uses' => 'StarController@index',
    ]);

    Route::get('admin/planets', [
        'as' => 'admin_planets_show',
        'uses' => 'PlanetController@index',
    ]);


});