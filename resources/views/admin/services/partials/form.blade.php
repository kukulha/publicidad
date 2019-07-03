<div class="input-field">
	{{ Form::label('name', 'Nombre del Servicio') }}
	{{ Form::text('name', null, ['id' => 'name']) }}
	@error ('name')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror
</div>

<div class="input-field">
	{{ Form::label('slug', 'URL') }}
	{{ Form::text('slug', null, ['id' => 'slug']) }}
	@error ('slug')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror
</div>

<div class="input-field">
	{{ Form::label('subtitle', 'Subtitulo') }}
	{{ Form::text('subtitle', null) }}
	@error ('subtitle')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror
</div>

<div class="input-field">
	{{ Form::label('stage_id', 'Etapa') }}
	<br><br>
	{{ Form::select('stage_id' , $stages, null) }}
</div>

<div class="file-field field-input">
	<div class="btn azul">
		<span>Imagen</span>
		{{ Form::file('file', null) }}	
	</div>
	<div class="file-path-wrapper">
		{{ Form::text('file', null ,['class' => 'file-path'])}}
	</div>
	@error ('file')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror 
</div>

<div class="file-field field-input">
	<div class="btn azul">
		<span>Imagen 2</span>
		{{ Form::file('file2', null) }}	
	</div>
	<div class="file-path-wrapper">
		{{ Form::text('file2', null ,['class' => 'file-path'])}}
	</div>
	@error ('file2')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror 
</div>



<div class="input-field">
	{{ Form::label('description', 'Descripción') }}
	<br><br>
	{!! Form::textarea('description', null, ['class' => 'materialize-textarea', 'id' => 'description']) !!}
</div>

<div class="input-field">
	{!! Form::submit('Guardar', ['class' => 'btn btn-block azul']) !!}
</div>

@section('scripts')
	<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
	<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
	<script>
		$(document).ready(function(){
			$('#name, #slug').stringToSlug({
				callback: function(text){
					$('#slug').val(text);
				}
			});

			ClassicEditor
    		.create( document.querySelector( '#description' ) )
    		.catch( error => {
        	console.error( error );
    	} );
		});
	</script>
@endsection