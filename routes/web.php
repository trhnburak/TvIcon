<?php

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

Route::get('/', [\App\Http\Controllers\App\Home\HomeController::class, 'index'] )->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function (\Illuminate\Routing\Router $router) {
    $router->get('blog', [\App\Http\Controllers\Admin\Blog\BlogController::class, 'index'])->name('blog');
    $router->get('blog/create', [\App\Http\Controllers\Admin\Blog\BlogController::class, 'create'])->name('blog.create');
    $router->post('blog/store', [\App\Http\Controllers\Admin\Blog\BlogController::class, 'store'])->name('blog.store');
    $router->get('blog/edit/{id}', [\App\Http\Controllers\Admin\Blog\BlogController::class, 'edit'])->name('blog.edit');
    $router->post('blog/update', [\App\Http\Controllers\Admin\Blog\BlogController::class, 'update'])->name('blog.update');
    $router->get('blog/delete/{id}', [\App\Http\Controllers\Admin\Blog\BlogController::class, 'delete'])->name('blog.delete');
    
    
    
});