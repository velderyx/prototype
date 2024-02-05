<?php

use App\Http\Controllers\PartController;
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
    return view('welcome');
});

route::get('/part', [PartController::class, 'index'])->name('part.index');
route::get('/part/create', [PartController::class, 'create'])->name('part.create');
route::post('/part', [PartController::class, 'store'])->name('part.store');

