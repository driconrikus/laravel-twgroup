<div class="input-group">
    {{ Form::text('comment', null, ['class' => 'form-control', 'id' => 'comment', 'placeholder' => 'Deja un comentario...']) }}
    {{ Form::submit('Enviar', ['class' => 'btn btn-sm btn-primary ml-3 pull-right'])  }}
</div>



@section('scripts')
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.config.height = 400;
CKEDITOR.config.widsth = 'auto';

CKEDITOR.replace( 'content',{height: 500});
</script>
@endsection