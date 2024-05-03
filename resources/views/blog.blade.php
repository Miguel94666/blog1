@extends('template')
@section('content')

   <h1>listado</h1>

    @foreach ($posts as $post)
    <p>
    <strong>{{ $post->id }} </strong>
        <a href="{{route ('post',$post['slug'])}}">
           {{ $post->title }}
        </a>
        <br>
        <span> {{$post->user->name}}</span>
    </p>
    @endforeach
    {{ $posts->links()}} //esto es para que se muestre la paginacion
@endsection
