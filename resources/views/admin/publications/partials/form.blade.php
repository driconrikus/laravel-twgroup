<div class="form-group">
    {{ Form::label('title', 'Título') }}
    {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) }}
</div>

<div class="form-group">
    {{ Form::label('content', 'Contenido') }}
    {{ Form::text('content', null, ['class' => 'form-control', 'id' => 'content']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'])  }}
</div>
