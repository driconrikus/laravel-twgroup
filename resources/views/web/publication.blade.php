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
               <hr>
               <p class="d-flex justify-content-end">Publicado: {{ $publication->created_at }} </p>
               <div class="col-md-12 text-right">
               <a href="{{ route('publications.edit', $publication->id) }}" class="btn btn-sm btn-primary">Editar...</a>
               </div>
               <hr>
               <div class="card-body">
                {!! Form::model($publication, ['route' => ['publication', $publication->title], 'method' => 'POST']) !!}
                        
                        @include('admin.publications.partials.comment')

                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection