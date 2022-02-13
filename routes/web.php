<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\CompleteController;
use App\Http\Controllers\ProgressController;


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
    return view('home',[
        "title" => "Welcome Tester"
    ]);
});

Route::get('/tasks', function (){
    return view('tasks',[
        "title" => "List of Tasks"
    ]);
});

Route::get('/tasks/task', [TaskController::class, 'index']); 

Route::get('/tasks/task/new', [NewController::class,'index']); 

Route::get('/tasks/task/problem',[ProblemController::class, 'index']);

Route::get('/tasks/task/progress', [ProgressController::class, 'index']);

Route::get('/tasks/task/testing', [TestingController::class, 'index']);

Route::get('/tasks/task/complete', [CompleteController::class, 'index']);

Route::get('/tasks/task/edit_new', function () {
    return view('edit_new', [
        "title" => "Edit New",
        "page" => "new"
    ]);
});
Route::get('/tasks/task/edit_problem', function () {
    return view('edit_problem', [
        "title" => "Edit Problem",
        "page" => "problem"
    ]);
});
Route::get('/tasks/task/edit_progress', function () {
    return view('edit_problem', [
        "title" => "Edit Progress",
        "page" => "progress"
    ]);
});
Route::get('/tasks/task/edit_testing', function () {
    return view('edit_problem', [
        "title" => "Edit Testing",
        "page" => "testing"
    ]);
});
Route::get('/tasks/task/edit_complete', function () {
    return view('edit_complete', [
        "title" => "Edit Complete",
        "page" => "complete"
    ]);
});

