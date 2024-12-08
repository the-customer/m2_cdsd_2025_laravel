<h4>Archives</h4>
<ol class="list-unstyled mb-3">

        @if ($archives)
            @foreach ($archives as $archive)
                <a href="#">
                    {{-- {{ $archive->month }} - {{ $archive->year }} --}}
                    {{ date('F Y',mktime(0,0,0,$archive->month,1,$archive->year)) }}
                </a>
                <br>
            @endforeach
        @endif


</ol>
