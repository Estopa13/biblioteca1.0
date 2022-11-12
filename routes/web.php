<?php


use Illuminate\Support\Facades\Auth;
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
    return view('layouts.template');
})->name('home');



Auth::routes();

Route::resource('/user','Backend\Role_User\UserController',['except'=>['create','store']])->names('user');
Route::resource('/role','Backend\Role_User\RoleController')->names('role');
Route::resource('/category','Backend\Role_User\CategoryController')->names('category');
//routes::resource('/escritores','Backend\Role_User\EscritorController')->names('escritores');

//Route::resource('/permission','Backend\Role_User\PermissionController')->names('permission');