<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Backend\UserController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/admin/logout',[AdminController::class, 'logout' ])->name('admin.logout');

//barang
Route::prefix('barang')->group(function(){
    Route::get('/view',[BarangController::class, 'BarangView' ])->name('barang.view');
    Route::get('/add',[BarangController::class, 'BarangAdd' ])->name('barang.add');
    Route::post('/store',[BarangController::class, 'BarangStore' ])->name('barangs.store');
    Route::get('/edit/{id}',[BarangController::class, 'BarangEdit' ])->name('barangs.edit');
    Route::post('/update/{id}',[BarangController::class, 'BarangUpdate' ])->name('barangs.update');
    Route::get('/delete/{id}',[BarangController::class, 'BarangDelete' ])->name('barangs.delete');
});

//user
Route::prefix('users')->group(function(){
    Route::get('/view',[UserController::class, 'UserView' ])->name('user.view');
    Route::get('/add',[UserController::class, 'UserAdd' ])->name('user.add');
    Route::post('/store',[UserController::class, 'UserStore' ])->name('users.store');
    Route::get('/edit/{id}',[UserController::class, 'UserEdit' ])->name('users.edit');
    Route::post('/update/{id}',[UserController::class, 'UserUpdate' ])->name('users.update');
    Route::get('/delete/{id}',[UserController::class, 'UserDelete' ])->name('users.delete');
});