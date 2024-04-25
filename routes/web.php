<?php

use App\Http\Controllers\PartController;
use App\Http\Controllers\Items\ItemController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\StatusController;
use App\Http\Livewire\PartLivewire;
use App\Livewire\PartIndex;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/partindex',[PartIndex::class, 'index'])->name('part.index');

Route::get('/', function () {
    return redirect('/part');
});

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);


Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('layout.main');

route::get('/part', [PartController::class, 'index'])->name('part.index');
route::get('/part-logs', [PartController::class, 'logs'])->name('part.logs');
route::get('/part-archive', [PartController::class, 'index2'])->name('part.index2');
route::get('/part/create', [PartController::class, 'create'])->name('part.create');
route::post('/part', [PartController::class, 'store'])->name('part.store');
route::get('/part/{part}/edit', [PartController::class, 'edit'])->name('part.edit');
route::put('/part/{part}/update', [PartController::class, 'update'])->name('part.update');
route::get('/part/{part}/destroy', [PartController::class, 'destroy'])->name('part.destroy');
route::get('/part/{part}/change-status', [PartController::class, 'changeStatus'])->name('part.change-status');


route::get('/item', [ItemController::class, 'index'])->name('item.index');
route::post('/item', [ItemController::class, 'store'])->name('item.store');

// parts attributes
route::post('/status', [StatusController::class, 'store'])->name('status.store');
route::post('/car', [CarController::class, 'store'])->name('car.store');
route::post('/insurance', [PartLivewire::class, 'store'])->name('insurance.store');
route::post('/location', [LocationController::class, 'store'])->name('location.store');
route::post('/supplier', [SupplierController::class, 'store'])->name('supplier.store');

route::get('/test', [TestController::class, 'test'])->name('test.index');
route::post('/test', [TestController::class, 'store'])->name('test.store');



// Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/login',[LoginController::class, 'authenticate']);
// Route::post('/logout',[LoginController::class, 'logout']);


// Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('layout.main')->middleware('auth');

// route::get('/part', [PartController::class, 'index'])->name('part.index')->middleware('auth');
// route::get('/part/create', [PartController::class, 'create'])->name('part.create')->middleware('auth');
// route::post('/part', [PartController::class, 'store'])->name('part.store')->middleware('auth');
// route::get('/part/{part}/edit', [PartController::class, 'edit'])->name('part.edit')->middleware('auth');
// route::put('/part/{part}/update', [PartController::class, 'update'])->name('part.update')->middleware('auth');
// route::get('/part/{part}/destroy', [PartController::class, 'destroy'])->name('part.destroy')->middleware('auth');


// route::get('/item', [ItemController::class, 'index'])->name('item.index')->middleware('auth');
// route::post('/item', [ItemController::class, 'store'])->name('item.store')->middleware('auth');

// // parts attributes
// route::post('/status', [StatusController::class, 'store'])->name('status.store')->middleware('auth');
// route::post('/car', [CarController::class, 'store'])->name('car.store')->middleware('auth');
// route::post('/insurance', [InsuranceController::class, 'store'])->name('insurance.store')->middleware('auth');
// route::post('/location', [LocationController::class, 'store'])->name('location.store')->middleware('auth');
// route::post('/supplier', [SupplierController::class, 'store'])->name('supplier.store')->middleware('auth');

// route::get('/test', [TestController::class, 'test'])->name('test.index')->middleware('auth');
// route::post('/test', [TestController::class, 'store'])->name('test.store')->middleware('auth');
