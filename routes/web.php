<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Route::get('/admin/user', function () {
//     return ('/admin/user');
// });

// Route::get('/admin/slider', function () {
//     return ('/admin/slider');
// });

// Route::get('/admin/category', function () {
//     return ('/admin/category');
// });

$prefixAdmin = config('zvn.url.prefix_admin');
// $prefixAdmin = Config::get('zvn.url.prefix_admin', 'default');

// Route::prefix($prefixAdmin)->group(function () {
//     Route::get('user', function () {
//         return ('/admin/user');
//         // Matches The "/admin/users" URL
//     });
//     Route::get('slider', function () {
//         return ('/admin/slider');
//     });
//     Route::get('category', function () {
//         return ('/admin/category');
//     });
// });

Route::group(['prefix' => $prefixAdmin], function () {

    Route::get('user', function () {
        return ('/admin/user');
        // Matches The "/admin/users" URL
    });

    // ================================ DASHBOARD ================================
    $prefix         = 'dashboard';
    $controllerName = 'dashboard';
    Route::prefix($prefix)->group(function () use ($controllerName) {
        $controller = ucfirst($controllerName) . 'Controller@';
        Route::get('/',                 ['as' => $controllerName,               'uses' => $controller . 'index']);
    });

    // ================================ SLIDER ================================
    $prefix         = 'slider';
    $controllerName = 'slider';
    Route::prefix($prefix)->group(function () use ($controllerName) {
        $controller = ucfirst($controllerName) . 'Controller@';
        Route::get('/',                 ['as' => $controllerName,               'uses' => $controller . 'index']);
        Route::get('form/{id?}',        ['as' => $controllerName . '/form',     'uses' => $controller . 'form'])->where('id', '[0-9]+');
        Route::get('delete/{id}',       ['as' => $controllerName . '/delete',   'uses' => $controller . 'delete'])->where('id', '[0-9]+');
        Route::get('change-status-{status}/{id}',   ['as' => $controllerName . '/status',       'uses' => $controller . 'status']);
    });

    Route::get('category', function () {
        return ('/admin/category');
    });
});

// Route::get('/category/{id}', function ($id) {
//     return ('Category' . $id);
// })->where('id', '[0-9]+');

// Route::get('/category/{name?}', function ($name = 'John') {
//     return ($name);
// });
