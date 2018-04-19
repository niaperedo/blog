@extends('layouts.master')
@section('content')
    <div class="col-md-8 blog-main">
        @if(count($posts))
            @foreach($posts as $post)
            <div class="blog-post">
                <h2 class="blog-post-title"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>
                <p class="blog-post-body">{{ $post->body }}</p>
            </div><!-- /.blog-post -->
            @endforeach
        @endif

        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>
    </div><!-- /.blog-main -->
@endsection