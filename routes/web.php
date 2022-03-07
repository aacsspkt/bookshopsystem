<?php

use App\Http\Controllers\BookController;
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
})->name('welcome');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('/books')->controller(BookController::class)->group(function () {
        Route::get('/', 'index')->name('books.index');
        Route::get('/create', 'create')->name('books.create');
        Route::post('/', 'store')->name('books.store');
        Route::get('/{book}', 'show')->name('books.show');
        Route::get('/{book}/edit', 'edit')->name('books.edit');
        Route::put('/{book}', 'update')->name('books.update');
        Route::delete('/{book}', 'destroy')->name('books.destroy');
    });

    // Route::prefix('/cds')->controller(CdController::class)->group(function () {
    //     Route::get('/', 'index')->name('cds.index');
    //     Route::get('/create', 'create')->name('cds.create');
    //     Route::post('/', 'store')->name('cds.store');
    //     Route::get('/{cd}', 'index')->name('cds.show');
    //     Route::get('/{cd}/edit', 'edit')->name('cds.edit');
    //     Route::put('/{cd}', 'update')->name('cds.update');
    //     Route::delete('/{cd}', 'destroy')->name('cds.update');
    // });

    // Route::prefix('/users')->controller(UserController::class)->group(function () {
    //     Route::get('/', 'index')->name('users.index');
    //     Route::get('/create', 'create')->name('users.create');
    //     Route::post('/', 'store')->name('users.store');
    //     Route::get('/{user}', 'index')->name('users.show');
    //     Route::get('/{user}/edit', 'edit')->name('users.edit');
    //     Route::put('/{user}', 'update')->name('users.update');
    //     Route::delete('/{user}', 'destroy')->name('users.update');
    // });
});

require __DIR__ . '/auth.php';
