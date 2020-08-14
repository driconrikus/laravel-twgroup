@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-title">
                    <h2 class="card-title ml-2 text-center">Crear Publicación</h2>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'publications.store']) !!}
                        @include('admin.publications.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection