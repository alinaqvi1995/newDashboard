<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create', [App\Http\Controllers\AdminController::class, 'create'])->name('admin.create');

// Roles
// Route::get('/roles', [App\Http\Controllers\AdminController::class, 'roles'])->name('admin.role');
// Route::get('/roles/new', [App\Http\Controllers\AdminController::class, 'addRole'])->name('admin.addRole');
// Route::post('/roles/store', [App\Http\Controllers\AdminController::class, 'storeRole'])->name('admin.storeRole');
// Route::get('/roles/edit/{id}', [App\Http\Controllers\AdminController::class, 'editRole'])->name('admin.editRole');
// Route::get('/roles/destroy/{id}', [App\Http\Controllers\AdminController::class, 'destroyRole'])->name('admin.destroyRole');

Route::prefix('/admin')->group(function () {
    Route::middleware(['checkadmin'])->group(
        function () {

            Route::get('/', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('admin.dashboard');
            Route::get('/check', [App\Http\Controllers\AdminController::class, 'createaaa'])->name('admin.check');
            
        }
    );
});
