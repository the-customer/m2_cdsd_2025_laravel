<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use DB;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($slug)
    {
        // Recuperer l'article dont l'id egale $id:
        // $art = Article::where('slug', $slug)->first();
        // if(!$art){
        //     abort(404);
        // }
        $article = Article::with('category')->where('slug', $slug)->firstOrFail();

        $archives = Article::select(DB::raw('MONTH(published_at) as month, YEAR(published_at) as year'))
        ->groupBy('month','year')
        ->orderBy('year','desc')
        ->orderBy('month','desc')->get();

        $data = [
            'page_title'        => $article->title,
            'categories'        => Category::orderBy('name')->get(),
            'article'           => $article,
            'recent_articles'   => Article::where('id','!=',$article->id)->orderBy('id','desc')->limit(3)->get(),
            'archives'          => $archives,
            // 'related_articles'  => Article::where('category_id',$article->category_id)->take(3)->get(),
            'related_articles' => $article->category->articles()->where('id','!=',$article->id)->take(3)->get()
        ];
        return view('article.show',$data);
    }
}
