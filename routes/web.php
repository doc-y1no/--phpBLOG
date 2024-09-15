<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TailwindController;
use App\Http\Controllers\AddController;

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


Route::get('/', [BlogController::class, 'index'])->name('index');
Route::get('/tailwind', [TailwindController::class, 'tailwind'])->name('tailwind');
Route::get('/home', function () {
  return view('top'); // 'resources/views/home.blade.php'を返す
})->name('home');
Route::get('/add', [AddController::class, 'add'])->name('add');
Route::get('/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::post('/update/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::post('destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
