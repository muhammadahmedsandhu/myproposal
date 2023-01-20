<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\proposalcont;

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

Route::get('/', [proposalcont::class,'insertview'])->name('/');
Route::post('datapost', [proposalcont::class,'inserted'])->name('postdata');

Route::get('homepage', [proposalcont::class,'homepage'])->name('pagehome');
