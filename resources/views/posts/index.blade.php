@extends('template')

@section('content')
    <h1>Blog</h1>

    @foreach($posts as $post)
        <a href="{{ URL::to('blog/'.$post->id) }}">
            <h2>{{ $post->title }}</h2>
        </a>
        <p>{{ $post->content }}</p>

        <b>Tags:</b>

        <ul>
            @foreach($post->tags as $tag)
                <li>{{$tag->name}}</li>
            @endforeach
        </ul>

        <h3>Comments</h3>

        @foreach($post->comments as $comment)
            <b>Name: </b>{{$comment->name}}<br>
            <b>Comment:</b>{{$comment->comment}}<br>
        @endforeach
        <hr>
    @endforeach
@endsection