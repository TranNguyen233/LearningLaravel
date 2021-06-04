<?php

use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\Table\TableRow;
use Illuminate\Support\Facades\Auth;

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

// create a router to show 1 post

Route::get('/', [App\Http\Controllers\PostController::class, 'index']);
Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create']);
Route::post('post', [App\Http\Controllers\PostController::class, 'store']);
Route::get('post/{post}/edit', [App\Http\Controllers\PostController::class, 'edit']);
Route::get('post/{post}/show', [App\Http\Controllers\PostController::class, 'show']);
Route::put('post/{post}/update', [App\Http\Controllers\PostController::class, 'update']);
Route::delete('post/{post}/delete', [App\Http\Controllers\PostController::class, 'destroy']);
