<div id="recent-posts">
    <h4>Recent Articles</h4>
    <ul class="list-unstyled">
        @foreach($recent_articles as $article)
            <div class="card mb-3 border-0" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <a href="{{ route('articles.show',$article->id) }}">
                            @if (!$article->image)
                                <img src="{{ env('ARTICLE_DEFAULT_IMAGE') }}"
                                class="card-img-top">
                            @else
                                <img src="{{ $article->image}}"
                                class="card-img-top">
                            @endif
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="..."
                                    class="text-decoration-none">
                                    {{ Str::limit($article->title,20) }}
                                </a>
                            </h5>
                            <span class="badge text-bg-dark mt-1">
                                <i class="fa fa-calendar"></i>
                                {{ \Carbon\Carbon::parse($article->published_at)->format('d F Y') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </ul>
</div>
