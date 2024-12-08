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
        //Increment the number of views


        $article = Article::with('category')->where('slug', $slug)->firstOrFail();

        // $views = $article->views;
        // $views += 1;
        // $article->views = $views;
        // $article->save();

        $article->increment('views');
        // dd($article->views);

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
