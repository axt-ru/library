<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BooksSearchController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\OneGenreController;
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

Route::get('/test', function () {
    return view('test');
});

Route::get('/authors', [AuthorController::class, 'index']);

Route::get('/genres', [GenreController::class, 'index']);
Route::get('/one', [OneGenreController::class, 'show']);
Route::any('/search', [BooksSearchController::class, 'index'])->name('search');

Route::get('/dbtest', function () {
    $posts = \Illuminate\Support\Facades\DB::table('books')->get();
    return view('dbtest', compact('posts'));
});
