<?php

use App\Http\Controllers\HewanController;
// use App\Models\Hewan;
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
    return view('create');
});

Route::get('create', [UserController::class, 'tambah'])->name('create');

Route::pot('create', [UserController::class, 'create'])->name('create');

Route::get('/delete/{id}', [UseController::class, 'delete'])->name('delete');

Route::get('/tampilupdate/{id}', [UseController::class, 'tampilupdate'])->name('tampilupdate');

Route::post('/update/{id}', [UseController::class, 'update'])->name('update');