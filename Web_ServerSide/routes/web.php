<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TasksAPIController;
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


//Rota para adicionar o MiddleWare

//Route::get('home/dashboard', [DashboardController::class, 'viewDashboard'])->name('home.dashboard')->middleware('auth');

Route::get('home/dashboard', [DashboardController::class, 'viewDashboard'])->name('home.dashboard');
// Route::get('/home', function () {
//     return view('main.home');
// })->name('home.index');

Route::get('/users/view/{id}', [UserController::class, 'viewUser']
)->name('users.view');


Route::get('/home', [IndexController::class, 'index']
)->name('home.index');



//Route::get('/home', [UserController::class, 'indexUser']
//)->name('home.index');




Route::post('/users/update', [UserController::class,  'updateUser'])
->name('users.update');

Route::post('/users/create', [UserController::class,  'createUser'])
->name('users.create');

Route::post('/tasks/update', [TaskController::class, 'updateTask']
)->name('tasks.update'); //este post faz o envio da view

Route::post('/tasks/create', [TaskController::class, 'createTask']
)->name('tasks.create');

Route::get('/users/add', [UserController::class, 'addUser']
)->name('users.add');

Route::get('/users/all', [UserController::class, 'allUsers']
)->name('users.all');

Route::get('/users/delete/{id}', [UserController::class, 'deleteUser']
)->name('users.delete');

Route::get('/tasks/all', [TaskController::class, 'allTasks']
)->name('tasks.allTasks');

Route::get('/tasks/add', [TaskController::class, 'addTask'])
->name('tasks.add_tasks'); //este get mostra a view

Route::get('/tasks/view/{id}', [TaskController::class, 'viewTask']
)->name('tasks.view');

Route::get('/tasks/delete/{id}', [TaskController::class, 'deleteTask']
)->name('tasks.delete');

/*Route::get('/users/all', [UserController::class, 'allUsers']
)->name('users.all');*/

// Route::get('/users/all', [UserController::class, 'info']
// )->name('users.all');


Route::fallback(function(){
    return view('main.fallback');
});

Route::get('task/{task}', [TasksAPIController::class, 'show']);

Route::apiResource('task', TasksAPIController::class);
