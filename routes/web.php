<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\PagesController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MetaDataController;
use App\Http\Controllers\Admin\CategoryProjectController;
use App\Http\Controllers\Client\CallbackController;
use App\Http\Controllers\Client\SitemapController;
use App\Http\Controllers\Admin\ProjectsController;

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
Auth::routes([
    'register' => false,
    'verify' => false,
    'reset' => false
]);
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [HomeController::class, 'index']);

    Route::prefix('categories')->name('categories.')->group(function () {

        Route::get('/{categoryKey}', [ProjectsController::class, 'index'])->name('projects.index');

        Route::name('meta.')->group(function () {
            Route::get('/{categoryKey}/meta/edit', [MetaDataController::class, 'edit'])->name('edit');
            Route::post('/{categoryKey}/meta/update', [MetaDataController::class, 'update'])->name('update');
        });

        Route::name('projects.')->group(function () {
            Route::get('/{categoryKey}/create', [ProjectsController::class, 'create'])->name('create');
            Route::post('/{categoryKey}/store', [ProjectsController::class, 'store'])->name('store');
            Route::get('/{categoryKey}/projects/{id}/edit', [ProjectsController::class, 'edit'])->name('edit');
            Route::post('/{categoryKey}/projects/{id}/update', [ProjectsController::class, 'update'])->name('update');
            Route::get('/{categoryKey}/projects/{id}/delete', [ProjectsController::class, 'destroy'])->name('delete');
            Route::get('/{categoryKey}/projects/{id}/media/{image}/delete', [ProjectsController::class, 'destroyImage'])->name('deleteImage');
        });

    });
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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('sitemap.xml', [SitemapController::class, 'index']);
