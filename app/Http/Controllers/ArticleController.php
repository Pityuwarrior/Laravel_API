<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return Article::All();
    }
    
    /*Getting one*/
    public function show(Article $article){
        return $article;
    }
         
    /*Creating one*/
    public function store(Request $request){
        $article = Article::create($request->all());
        
        return response()->json($article, 201/*Object created successfuly*/);
    }
    
    /*Updating one*/
    public function update(Request $request, Article $article){
        $article->update($request->all());
    
        return response()->json($article, 200/*Success*/);
    }
    
    /*Delete one*/
    public function delete(Request $request, Article $article){
        $article->delete();
    
        return response()->json(null, 204/*No content retun, Success*/);
    }
}
