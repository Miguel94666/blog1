@extends('template') //esto es para que herede de la plantilla template
@section('content') //esto es para que se muestre en el bloque content de la plantilla
    <p> detalle</p>
    
    <h1>{{ $post->title }}</h1>
      <p>
        {{ $post->body }}
      </p>
    

@endsection