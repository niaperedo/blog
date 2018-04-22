@extends('layouts.master')
@section('content')
    <div class="col-md-8 blog-main">
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->id }}</h2>
            <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>
            <p class="blog-post-body">{{ $post->body }}</p>
            <hr>
            <div class="blog-comments">
                <ul class="list-group">
                    @foreach ($post->comments as $comment)
                        <li class="list-group-item">
                            <strong>{{ $comment->created_at->diffForHumans() }}:</strong>
                            {{ $comment->body }}
                        </li>
                    @endforeach
                </ul>
            </div><!-- /.blog-comments -->
        </div><!-- /.blog-post -->
    </div><!-- /.blog-main -->
@endsection