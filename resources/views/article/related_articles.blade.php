<div class="row py-4">
    <h4>Related Articles</h4>
    @foreach ($related_articles as $article)
        <div class="col-lg-4 mb-3">
            <div class="card bg-light rounded-4 shadow border-0">
                <a href="{{ route('articles.show',$article->slug) }}">
                    @if (!$article->image)
                        <img src="{{ env('ARTICLE_DEFAULT_IMAGE') }}" class="card-img-top">
                    @else
                        <img src="{{ $article->image }}" class="card-img-top">
                    @endif
                </a>
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ route('articles.show',$article->slug) }}" class=" text-decoration-none">
                            {{ Str::limit($article->title,20) }}
                        </a>
                    </h5>
                    <p class="card-text mt-3">
                        {{ Str::limit($article->content,50) }}
                    </p>
                </div>
                <div class="card-footer border-0">
                    <a href="{{ route('articles.show',$article->slug) }}"
                        class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
