<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;


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


Route::get('/', [NavController::class, 'home']);

Route::get('comics', [NavController::class, 'comics']);
Route::get('drawers', [NavController::class, 'drawers']);

Route::get('addComic', [NavController::class, 'addComic']);
Route::post('addComic', [ActionController::class, 'addComic']);
Route::get('addDrawer', [NavController::class, 'addDrawer']);
Route::post('addDrawer', [ActionController::class, 'addDrawer']);

Route::post('deleteComic', [ActionController::class, 'deleteComic']);
Route::post('deleteDrawer', [ActionController::class, 'deleteDrawer']);


Route::get('comic/{id}', [NavController::class, 'comic']);
Route::post('updateComic', [NavController::class, 'updateComic']);
Route::post('updateOneComic', [ActionController::class, 'updateComic']);

Route::get('drawer/{id}', [NavController::class, 'drawer']);
Route::post('updateDrawer', [NavController::class, 'updateDrawer']);
Route::post('updateOneDrawer', [ActionController::class, 'updateDrawer']);