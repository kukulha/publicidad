{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="input-field">
	{{ Form::label('name', 'Titulo*') }}
	{{ Form::text('name', null, ['id' => 'name']) }}
	@error ('name')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror
</div>

<div class="input-field">
	{{ Form::label('slug', 'URL*') }}
	{{ Form::text('slug', null, ['id' => 'slug']) }}
	@error ('slug')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror
</div>


<div class="input-field">
	{{ Form::label('category_id', 'Categoría*') }}
	<br>
	{{ Form::select('category_id' , $categories, null) }}
</div>

<div class="file-field field-input">
	<div class="btn azul">
		<span>Imagen Principal</span>
		{{ Form::file('file', null) }}	
	</div>
	<div class="file-path-wrapper">
		{{ Form::text('file', null ,['class' => 'file-path'])}}
		<span class="small">Imagen debe ser de 400 x 400 px</span>
	</div>
	@error ('file')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror 
</div>
<div class="file-field field-input">
	<div class="btn azul">
		<span>Imagen Secundaria</span>
		{{ Form::file('file2', null) }}	
	</div>
	<div class="file-path-wrapper">
		{{ Form::text('file2', null ,['class' => 'file-path'])}}
		<span class="small">Imagen debe ser de 1200 x 780 px</span>
	</div>
	@error ('file2')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror 
</div>

<div class="input-field">
	{{ Form::label('excerpt', 'Extracto*') }}
	{!! Form::text('excerpt', null, ['data-length' => '144', 'id' => 'excerpt']) !!}
</div>

<div class="input-field">
	{{ Form::label('body', 'Contenido*') }}
	<br><br>
	{!! Form::textarea('body', null, ['class' => 'materialize-textarea', 'id' => 'body']) !!}
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
    			.create( document.querySelector( '#body' ) )
    			.catch( error => {
        		console.error( error );
    		} );
		});
	</script>
@endsection