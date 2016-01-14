@extends('template')

@section('content')
    <h1>Detalhe Blog</h1>

    <h2>{{$title}}</h2>

    <p>{{$content}}</p>

    <a href="{{ URL::to('blog') }}">
        <button class="btn btn-default">Voltar</button>
    </a>
@endsection