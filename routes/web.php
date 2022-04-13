<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\PagesController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MetaDataController;
use App\Http\Controllers\Admin\CategoryProjectController;
use App\Http\Controllers\Client\CallbackController;
use App\Http\Controllers\Client\SitemapController;

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

// Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [HomeController::class, 'kitchenPage']);
    Route::get('kitchen', [HomeController::class, 'kitchenPage'])->name('kitchen');
    Route::get('hall', [HomeController::class, 'hallPage'])->name('hall');
    Route::get('commercial', [HomeController::class, 'commercialPage'])->name('commercial');
    Route::get('wardrobe', [HomeController::class, 'wardrobePage'])->name('wardrobe');
    Route::get('children', [HomeController::class, 'childrenPage'])->name('children');


    Route::get('{category}/projects/{id}/delete', [CategoryProjectController::class, 'destroy'])->name('projects.delete');
    Route::get('{category}/projects/{id}/delete/{image}', [CategoryProjectController::class, 'destroyImage'])->name('projects.deleteImage');
    Route::resource('{category}/projects', CategoryProjectController::class);
    Route::resource('meta', MetaDataController::class);
});

// Client
Route::get('/', [PagesController::class, 'landingPage'])->name('landing');
Route::get('/kuhni', [PagesController::class, 'kitchenPage'])->name('kitchen');
Route::get('/shkafy-prihozhie', [PagesController::class, 'hallPage'])->name('hall');
Route::get('/ofisnaya-torgovaya-mebel', [PagesController::class, 'commercialPage'])->name('commercial');
Route::get('/garderoby-tumby', [PagesController::class, 'wardrobePage'])->name('wardrobe');
Route::get('/detskaya-mebel', [PagesController::class, 'childrenPage'])->name('children');

Route::post('/callback', [CallbackController::class, 'store'])->name('callback');

Route::get('/{category}/{slug}', [PagesController::class, 'projectPage'])->name('project');

Auth::routes([
    'register' => false,
    'verify' => false,
    'reset' => false
]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('sitemap.xml', [SitemapController::class, 'index']);
