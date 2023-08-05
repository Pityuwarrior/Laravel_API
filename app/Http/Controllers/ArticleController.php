<?php

namespace App\Http\Controllers;
use App\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return Article::All();
    }
    
    /*Getting one*/
    public function show($id){
        return Article::find($id);
    }
         
    
    /*Creating one*/
    public function store(Request $request){
        return Article::create($request->all());
    }
    
    /*Updating one*/
    public function update(Request $request, $id){
        $artical = Article::findOrFail($id);
        $artical->update($request->all());
    
        return $artical;
    }
    
    /*Delete one*/
    public function delete(Request $request, $id){
        $artical = Article::findOrFail($id);
        $artical->delete();
    
        return 204;
    }
}
