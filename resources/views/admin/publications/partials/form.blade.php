<div class="form-group">
    {{ Form::label('title', 'Título') }}
    {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) }}
</div>

<div class="form-group">
    {{ Form::label('content', 'Contenido') }}
    {{ Form::textarea('content', null, ['class' => 'form-control', 'id' => 'content']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'])  }}
</div>

@section('scripts')
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.config.height = 400;
CKEDITOR.config.widsth = 'auto';

CKEDITOR.replace( 'content',{height: 500});
</script>
@endsection