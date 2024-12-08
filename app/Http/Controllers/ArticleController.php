<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($slug)
    {
        // Recuperer l'article dont l'id egale $id:
        $data = [
            // 'article'           => Article::find($id),
            'recent_articles'   => Article::orderBy('id','desc')->limit(3)->get()
        ];
        return view('article.show',$data);
    }
}
