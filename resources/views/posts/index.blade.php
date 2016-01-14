@extends('template')

@section('content')
    <h1>Blog</h1>

    @foreach($posts as $post)
        <a href="{{ URL::to('blog/'.$post->id) }}">
            <h2>{{ $post->title }}</h2>
        </a>
        <p>{{ $post->content }}</p>
        <hr>
    @endforeach
@endsection