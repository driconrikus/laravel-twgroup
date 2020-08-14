@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
            <h2 class="card-title text-center">Editar Publicacion</h2>
                <div class="card-body">
                {!! Form::model($publication, ['route' => ['publications.update', $publication->id], 'method' => 'PUT']) !!}
                        
                        @include('admin.publications.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection