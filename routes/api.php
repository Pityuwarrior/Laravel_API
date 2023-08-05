<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Article;

/*Getting all*/
Route::get('articles', function() {
    return Article::All();
});

/*Getting one*/
Route::get('articles', function($id) {
    return Article::find($id);
});

/*Creating one*/
Route::post('articles', function(Request $request){
    return Article::create($request->all);
});

/*Updating one*/
Route::put('article/{id}', function(Request $request, $id){
    $artical = Article::findOrFail($id);
    $artical->update($request->all());

    return $artical;
});

/*Delete one*/
Route::delete('articles/{id}', function($id){
    Article::find($id)->delete();

    return 204;
});

/**/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
