<?php

namespace App\Http\Controllers;

use App\Models\Article;
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
        $archives = Article::select(DB::raw('MONTH(published_at) as month, YEAR(published_at) as year'))
        ->groupBy('month','year')
        ->orderBy('year','desc')
        ->orderBy('month','desc')->get();

        $data = [
            // 'article'           => Article::find($id),
            'article'           => Article::where('slug', $slug)->firstOrFail(),
            'recent_articles'   => Article::orderBy('id','desc')->limit(3)->get(),
            'archives'          => $archives
        ];
        return view('article.show',$data);
    }
}
