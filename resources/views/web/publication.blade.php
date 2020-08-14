@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
        <h1>{{ $publication->title }}</h1>


        <div class="card mb-3">
            <div class="card-body">
               <p class="card-text"> 
                   {{ $publication->content }}
               </p>
               <p class="d-flex justify-content-end">Fecha de publicación: {{ $publication->created_at }} </p>
               <a href="{{ route('publications.edit', $publication->id) }}" class="d-flex justify-content-end">Editar...</a>
               <a href="#" class="d-flex justify-content-end">Añadir comentario</a>
            </div>

        </div>
    </div>
</div>
@endsection