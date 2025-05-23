<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\UsersWebController;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('user.index');
});

Route::resource('user', UsersWebController::class);

Route::get('/phpinfo', function () {
    phpinfo();
});
