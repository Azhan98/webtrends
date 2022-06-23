<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;

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
    return view('index');
});
Route::get('/admintodokey=1000555081', function () {
    return view('admin-todo');
});
Route::get('index', [formController::class, 'index'])->name('index');
Route::post('create', [formController::class, 'create'])->name('create');
Route::get('adminkey=10119299930387378638', [formController::class, 'show'])->name('show');
Route::get('destroy/{id}', [formController::class, 'destroy'])->name('destroy');
