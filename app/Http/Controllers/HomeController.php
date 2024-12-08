<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // recuperer les articles la BD
        // $articles = \DB::table('articles')->get();
        $articles = Article::all();
        $data = [
            'articles' => $articles
        ];
        return view('home.index',$data);
    }

    public function about()
    {
        return view('home.about');
    }
}
