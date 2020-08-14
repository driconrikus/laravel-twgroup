@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                    <h2 class="card-title text-center">Ver Publicacion</h2>
                <div class="card-body">
                    <p><strong>Title</strong> {{ $publication->title }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection