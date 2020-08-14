@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-title">
                    Editar Publicacion
                </div>
                <div class="card-body">
                    {!! Form::model($publication, ['route' => ['publications.update', $publication->id],
                        'method' => 'PUT']) !!}
                        @include('admin.publications.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection