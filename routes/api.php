<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Article;
use App\Http\Controllers\ArticleController;

/*Defining the routes to the ArticleController*/ 
Route::get('articles', [ArticleController::class,'index']);
Route::get('articles/{article}', [ArticleController::class,'show']);
Route::post('articles', [ArticleController::class,'store']);
Route::put('articles/{article}', [ArticleController::class,'update']);
Route::delete('articles/{article}', [ArticleController::class,'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Closure functions
/*
*Getting all 
Route::get('articles', function() {
    return Article::All();
});

*Getting one
Route::get('articles', function($id) {
    return Article::find($id);
});

*Creating one
Route::post('articles', function(Request $request){
    return Article::create($request->all);
});

*Updating one
Route::put('article/{id}', function(Request $request, $id){
    $article = Article::findOrFail($id);
    $article->update($request->all());

    return $article;
});

*Delete one
Route::delete('articles/{id}', function($id){
    Article::find($id)->delete();

    return 204;
});
*/

