<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'landingPage'])->name('landing');
Route::get('/kitchen', [PagesController::class, 'kitchenPage'])->name('kitchen');
Route::get('/hall', [PagesController::class, 'hallPage'])->name('hall');
Route::get('/commercial', [PagesController::class, 'commercialPage'])->name('commercial');
Route::get('/wardrobe', [PagesController::class, 'wardrobePage'])->name('wardrobe');

Route::get('/project', [PagesController::class, 'projectPage'])->name('project');
