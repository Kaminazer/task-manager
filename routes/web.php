<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePage;
use App\Http\Controllers\Users;
use App\Http\Controllers\Tasks;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [HomePage::class, "index"])->name("HomePage.index");
Route::name("Users.")->group(function () {
    Route::post('/register',[Users::class, "register"])->name("register");
    Route::post('/authorize',[Users::class, "authorization"])->name("authorization");
    Route::get('/show', [Users::class, "show"])->name("show");
    Route::delete('/delete/{id}', [Users::class, "delete"])->name("delete");
});
Route::resource("tasks",Tasks::class);
Route::get('/statuses/{id}', [\App\Http\Controllers\Statuses::class, "showTasks"])->name("statuses.showTasks");
Route::get('/labels/{id}', [\App\Http\Controllers\Labels::class, "showTasks"])->name("labels.showTasks");
