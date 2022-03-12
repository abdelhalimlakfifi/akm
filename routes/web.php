<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categorieController;
use App\Http\Controllers\subscriberController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\articleController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/admin/get/categorie/add', [categorieController::class, 'index'])->name('get.add.categories');
    Route::get('/admin/get/subscriber/add', [subscriberController::class, 'index_add'])->name('get.subscriber.add');
    Route::get('/admin/get/subscriber/update', [subscriberController::class, 'index_update'])->name('get.subscriber.update');
    Route::get('/admin/get/event/create', [eventController::class, 'index'])->name('get.event.create');
    Route::get('/admin/get/article/create', [articleController::class, 'index'])->name('get.article.create');

    Route::post('/admin/post/categorie/add', [categorieController::class, 'store'])->name('post.add.categorie');
    
    // Route::post('/test', [categorieController::class, ])
    Route::get('/hello', function () {
        return view('welcome');
    });
});
