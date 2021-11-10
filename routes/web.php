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
use App\Models\Image;

Route::get('/', function () {
    return view('inicio');
})->name('/');
/*Route::get('/accounts/emailsignup/', function(){
    return view('registrarse');
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/configuraciones', [App\Http\Controllers\UserController::class, 'config'])->name('config');
Route::get('/editar-perfil', [App\Http\Controllers\UserController::class, 'editarPerfil'])->name('editar-perfil');

Route::post('/user/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
Route::get('/user/avatar/{filename}', [App\Http\Controllers\UserController::class, 'getAvatar'])->name('user.avatar');