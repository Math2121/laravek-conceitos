<?php


use Illuminate\Support\Facades\Route;

Route::namespace('Site')->group(function () {
    Route::get('/', HomeController::class)->name('site.home');

    Route::get("/products",'CategoryController@index')->name('site.products');
    Route::get("/products/{slug}",'CategoryController@show')->name('site.products.category');

    Route::get('/blog', BlogController::class)->name('site.blog');

    Route::view("/sobre","site.about.index")->name('site.about');

    Route::get("/contato",'ContactController@index')->name('site.contact');
    Route::post("/contato",'ContactController@contact')->name('site.contact.form');
});
