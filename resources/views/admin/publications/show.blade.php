@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-title">
                    Ver Publicacion
                </div>
                <div class="card-body">
                    <p><strong>Title</strong> {{ $publication->title }}</p>
                    <p><strong>Slug</strong>  {{ $publication->slug }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection