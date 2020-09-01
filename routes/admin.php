<?php

use Facades\App\Http\Controllers\AuthRoute;
use Illuminate\Support\Facades\Route;

// Auth::routes(['verify' => true]);

Route::get('/', 'DashboardController@index')->name('dashboard.index');

Route::resource('test','TestController');