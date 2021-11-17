<?php


use Illuminate\Support\Facades\Route;

Route::namespace('Site')->group(function () {
    Route::get('/', HomeController::class);

    Route::get("/products",'CategoryController@index');
    Route::get("/products/{slug}",'CategoryController@show');

    Route::get('/blog', BlogController::class);

    Route::view("/sobre","site.sobre.index");

    Route::get("/contato",'ContactController@index');
    Route::post("/contato",'ContactController@contact');
});
