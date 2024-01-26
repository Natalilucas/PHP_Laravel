<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;

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

Route::get('/users/view/{id}', [UserController::class, 'viewUser']
)->name('users.view');


Route::get('/home', [IndexController::class, 'index']
)->name('home.index');

//Route::get('/home', [UserController::class, 'indexUser']
//)->name('home.index');

Route::get('/users/all', [UserController::class, 'allUsers']
)->name('users.all');

Route::get('/users/add', [UserController::class, 'addUser']
)->name('users.add');

Route::get('/tasks/all', [TaskController::class, 'allTasks']
)->name('tasks.allTasks');

/*Route::get('/users/all', [UserController::class, 'allUsers']
)->name('users.all');*/

// Route::get('/users/all', [UserController::class, 'info']
// )->name('users.all');


Route::fallback(function(){
    return view('main.fallback');
});

