<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminContoller;
use App\Http\Controllers\BloggerContoller;


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

Route::get('/', [AdminContoller::class, 'welcome']);
Route::get('/test', [AdminContoller::class, 'test']);
Route::get('/single_page/{slug}', [AdminContoller::class, 'single_page']);

Route::post('/single_page/{id}', [AdminContoller::class, 'like']);
/*Route::post('/single_page/{id}', [AdminContoller::class, 'reply_store']);*/
Route::post('/single_page', [AdminContoller::class, 'comment'])->name('comment');



Route::get('/admin', [AdminContoller::class, 'index'])->middleware(['auth', 'verified', 'admin'])->name('admin');
Route::get('/admin/manage_articles', [AdminContoller::class, 'manage_articles'])->middleware(['auth', 'verified', 'admin']);
Route::get('/admin/view/{slug}', [AdminContoller::class, 'view'])->middleware(['auth', 'verified', 'admin']);
Route::post('/admin/edit', [AdminContoller::class, 'update'])->middleware(['auth', 'verified', 'admin']);

Route::get('/blogger', [BloggerContoller::class, 'index'])->middleware('auth', 'blogger')->name('blogger');
Route::get('/blogger/manage_articles', [BloggerContoller::class, 'manage_articles'])->middleware(['auth', 'verified', 'blogger']);
Route::post('/blogger/create', [BloggerContoller::class, 'store'])->middleware('auth', 'blogger');
Route::post('/blogger/edit', [BloggerContoller::class, 'update'])->middleware('auth', 'blogger');
Route::get('/blogger/{id}', [BloggerContoller::class, 'destroy'])->middleware('auth', 'blogger');
Route::get('/blogger/view/{id}', [BloggerContoller::class, 'view'])->middleware('auth', 'blogger');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
