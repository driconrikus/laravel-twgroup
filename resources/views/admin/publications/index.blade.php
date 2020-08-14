@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card mb-3">
                    <div class="">
                        <h2 class="card-title ml-2 text-center">Lista de publicaciones</h2>
                    </div>
                    <a href="{{ route('publications.create') }}"
                            class="btn btn-sm btn-primary pull-right">
                            Crear
                        </a>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Título</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($publications as $publication)
                        <tr>
                            <td>{{ $publication->id }}</td>
                            <td>{{ $publication->title }}</td>
                            <td width="10px">
                                <a href="{{ route('publications.show', $publication->id) }}" 
                                    class="btn btn-sm btn-primary">
                                    Ver
                                </a>
                            </td>
                            <td width="10px">
                                <a href="{{ route('publications.edit', $publication->id) }}" 
                                    class="btn btn-sm btn-secondary">
                                    Editar
                                </a>
                            </td>
                            <td width="10px">
                                    {!! Form::open(['route' => ['publications.destroy', $publication->id],
                                         'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>
                                    {!! Form::close() !!}
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection