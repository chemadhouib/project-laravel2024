<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ScategorieController;
use App\Http\Controllers\CategorieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('api')->group(function () {
    Route::resource('categories', CategorieController::class); // Utilisez `Route::resource` pour une seule ressource
});

Route::middleware('api')->group(function () {
Route::resource('scategories', 
ScategorieController::class); 
});

Route::get('/scat/{idcat}', 
[ScategorieController::class,'showSCategorieByCAT']);


Route::middleware('api')->group(function () {
    Route::resource('articles', ArticleController::class);
});