<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route ::get('/', [App\Http\Controllers\SiteController::class, 'getHome'])->name('getHome');
Route ::get('/About', [App\Http\Controllers\SiteController::class, 'getAbout'])->name('getAbout');
Route ::get('/Service', [App\Http\Controllers\SiteController::class, 'getService']);
Route ::get('/Gallery', [App\Http\Controllers\SiteController::class, 'getGallery']);
Route ::get('/Contact', [App\Http\Controllers\SiteController::class, 'getContact']);
