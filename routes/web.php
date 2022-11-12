<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EscritorController;
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
    return view('welcome');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/s_libro', function () {
    return view('s_libro');
});

Route::get('/escritores.create', function () {
    return view('escritores.create');
});
Route::get('/escritores.index', function () {
    return view('/escri');
});;

Route::get('/escritores.edit', function () {
    return view('escritores.edit');
});
Route::resource('/escri',EscritorController::class);

