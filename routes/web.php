<?php

use App\Http\Controllers\PartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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
    return redirect('/part');
});

Route::get('/login',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class, 'authenticate']);


Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('layout.main');

route::get('/part', [PartController::class, 'index'])->name('part.index');
route::get('/part/create', [PartController::class, 'create'])->name('part.create');
route::post('/part', [PartController::class, 'store'])->name('part.store');
route::get('/part/{part}/edit', [PartController::class, 'edit'])->name('part.edit');
route::put('/part/{part}/update', [PartController::class, 'update'])->name('part.update');
route::get('/part/{part}/destroy', [PartController::class, 'destroy'])->name('part.destroy');
