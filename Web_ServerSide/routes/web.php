<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;

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
})->name('bemvindos');

Route::get('/ola', function () {
    return '<h1>Hello Turma de Software</h1>';
})->name('home.hello');


Route::get('/hello/{nome}', function ($nome) {
    return '<h1>Hello Turma de Software</h1>'.$nome;
});


// Route::get('/home', function () {
//     return view('main.home');
// })->name('home.index');

Route::get('/home', [IndexController::class, 'indexHome']
)->name('home.index');

Route::get('/home', [IndexController::class, 'allContacts']
)->name('home.index');

Route::get('/users/add', [UserController::class, 'indexUser']
)->name('users.add');

Route::get('/users/all', [UserController::class, 'dayOfWeek']
)->name('users.all');


// Route::get('/users/all', [UserController::class, 'info']
// )->name('users.all');


Route::fallback(function(){
    return view('main.fallback');
});

