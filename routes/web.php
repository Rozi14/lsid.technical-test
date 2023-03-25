<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodolistController;
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

Route::controller(AuthController::class)->group(function () {
	Route::get('register', 'register')->name('register');
	Route::post('register', 'registerSimpan')->name('register.simpan');

	Route::get('login', 'login')->name('login');
	Route::post('login', 'loginAksi')->name('login.aksi');

	Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::get('/', function () {
	return view('welcome');
});

Route::middleware('auth')->group(function () {
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::controller(TodolistController::class)->prefix('todolist')->group(function () {
		Route::get('', 'index')->name('todolist');
		Route::get('tambah', 'tambah')->name('todolist.tambah');
		Route::post('tambah', 'simpan')->name('todolist.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('todolist.edit');
		Route::post('edit/{id}', 'update')->name('todolist.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('todolist.hapus');
	});
});
