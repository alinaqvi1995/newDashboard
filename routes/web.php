<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppSettingController;
use App\Http\Controllers\WebSettingController;
use App\Http\Controllers\AdminController;

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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Roles
// Route::get('/roles', [App\Http\Controllers\AdminController::class, 'roles'])->name('admin.role');
// Route::get('/roles/new', [App\Http\Controllers\AdminController::class, 'addRole'])->name('admin.addRole');
// Route::post('/roles/store', [App\Http\Controllers\AdminController::class, 'storeRole'])->name('admin.storeRole');
// Route::get('/roles/edit/{id}', [App\Http\Controllers\AdminController::class, 'editRole'])->name('admin.editRole');
// Route::get('/roles/destroy/{id}', [App\Http\Controllers\AdminController::class, 'destroyRole'])->name('admin.destroyRole');

Route::prefix('/admin')->group(function () {
    Route::middleware(['auth'])->group(
        function () {

            Route::get('/', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('admin.dashboard');
            Route::get('/equifax', [App\Http\Controllers\AdminController::class, 'create'])->name('admin.create');
            Route::POST('/equifax/create', [App\Http\Controllers\AdminController::class, 'credit_report'])->name('admin.create.credit_report');

            // All Users
            Route::get('/users', [AdminController::class, 'allUsers'])
                ->name('admin.allUsers');

            // Roles
            Route::get('/roles', [App\Http\Controllers\AdminController::class, 'roles'])->name('admin.role');
            Route::get('/roles/new', [App\Http\Controllers\AdminController::class, 'addRole'])->name('admin.addRole');
            Route::post('/roles/store', [App\Http\Controllers\AdminController::class, 'storeRole'])->name('admin.storeRole');
            Route::get('/roles/edit/{id}', [App\Http\Controllers\AdminController::class, 'editRole'])->name('admin.editRole');
            Route::get('/roles/destroy/{id}', [App\Http\Controllers\AdminController::class, 'destroyRole'])->name('admin.destroyRole');
            
            // App setttings
            Route::get('/app-setting/edit/{id}', [AppSettingController::class, 'edit'])
                ->name('edit.app-setting');

            Route::put('/app-setting/{id}', [AppSettingController::class, 'update'])
                ->name('update.app-setting');

            // Web settings
            Route::get('/web-setting/edit/{id}', [WebSettingController::class, 'edit'])
                ->name('edit.web-setting');

            Route::put('/web-setting/{id}', [WebSettingController::class, 'update'])
                ->name('update.web-setting');

        }
    );
});