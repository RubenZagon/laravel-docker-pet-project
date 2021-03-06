<?php

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
    return view('welcome');
});

Route::get('/hola/{name?}', function ($name = "usuario") {
    return "hola $name";
});

Route::get('/usuarios', function () {
    return "Usuarios";
});

Route::get('/usuarios/{userId}/edit', function ($userId) {
    settype($userId, "integer");
    if ($userId === 0) {
        throw new Exception("oh ohhh");
    }
    return "Vas a editar el usuario $userId";
});
