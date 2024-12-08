@extends('templates.app')


@section('content')
<section id="content">
    <div class="container px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home.index') }}" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-8">
                <h1>{{ $article->title }}</h1>
                <p>
                    <span class="badge text-bg-primary">
                        <i class="fa fa-calendar"></i>
                        {{ \Carbon\Carbon::parse($article->published_at)->format('d F Y à H:i:s') }}
                    </span>
                    <span class="badge text-bg-secondary">
                        {{ $article->views }} <i class="fa-solid fa-eye"></i>
                    </span>
                    <span class="badge text-bg-warning">
                        <i class="fa fa-tag"></i> {{ $article->category->name }}
                    </span>


                </p>

                <article class="blog-post">
                    <p>
                        @if (!$article->image)
                            <a href="#">
                                <img src="{{ env('ARTICLE_DEFAULT_IMAGE') }}"
                                    class="card-img-top">
                            </a>
                        @else
                            <img src="{{ $article->image }}" width="50%" class="card-img-top">
                        @endif
                    </p>
                    {!! nl2br($article->content) !!}

                </article>
                @include('article.related_articles')
            </div>

            <div class="col-lg-4">
                @include('templates.sidebar')
            </div>
        </div>
    </div>
</section>
@endsection
