@extends('templates.app')

@section('content')
<section id="latest-post">
    <div class="container">
        <div class="row g-4 py-3">
            @foreach ($articles as $article)
                <div class="col-lg-4">
                    <div class="card bg-light rounded-4 shadow border-0">
                        <a href="{{ route('articles.show',$article->slug) }}">
                            @if (!$article->image)
                                <img src="{{ env('ARTICLE_DEFAULT_IMAGE') }}" class="card-img-top">
                            @else
                                <img src="{{ $article->image }}" class="card-img-top">
                            @endif

                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#"
                                    class="text-decoration-none">
                                   {{ $article->title }}
                                </a>
                            </h4>
                            <p class="card-text mt-3">
                                {{ Str::limit($article->content,rand(25,500)) }}
                            </p>
                        </div>
                        <div class="card-footer border-0">
                            <a href="#"
                                class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
