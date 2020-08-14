@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
        <h1>Lista de Publicaciones</h1>

        @foreach($publications as $publication)
        <div class="card mb-3">
            <div class="card">
                <h2 class="card-title mt-2">
                    {{ $publication->title }}
                </h2>
            </div>
            <div class="card-body">
               <p class="card-text"> 
                   {{ $publication->content }}
               </p>
            <a href="{{ route('publication', $publication->slug)}}" class="d-flex justify-content-end">Ver más</a>
            </div>

        </div>
        @endforeach
        {{ $publications->render() }}
    </div>
</div>
@endsection