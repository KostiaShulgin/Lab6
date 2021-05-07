<?php

use App\Http\Controllers\myContr;
use App\Models\Book;
use App\Models\Copy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use \App\Models\Author;
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

Route::get('/main', [myContr::class, 'allBooks']);

Route::get('/authors', [myContr::class, 'allAuthors']);

Route::get('/author/{id}', [myContr::class, 'authorPage']);

Route::get('/book/{id}', [myContr::class, 'bookPage']);

Route::post('/main/searchBookByTitle', [myContr::class, 'bookByTitle']);

Route::get('/booksByGenre/{genre}', [myContr::class, 'bookByGenre']);

Route::get('/book/{id}/copy/{inv_number}', [myContr::class, 'copyPage']);






