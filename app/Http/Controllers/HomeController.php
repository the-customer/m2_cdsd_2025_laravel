<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // recuperer les articles la BD
        // $articles = \DB::table('articles')->get();
        $articles = Article::all();
        $categories = Category::orderBy('name')->get();
        $data = [
            'articles' => $articles,
            'page_title' => 'Home',
            'categories' => $categories
        ];
        return view('home.index',$data);
    }

    public function about()
    {
        return view('home.about');
    }
}
