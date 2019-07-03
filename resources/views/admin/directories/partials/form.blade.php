Informacion de la Empresa
<div class="input-field">
	{{ Form::label('name', 'Nombre de la Empresa') }}
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
	{{ Form::label('phone', 'Teléfono') }}
	{{ Form::text('phone', null) }}
	@error ('phone')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror
</div>

<div class="input-field">
	{{ Form::label('email', 'Correo Electrónico') }}
	{{ Form::text('email', null) }}
	@error ('email')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror
</div>

<div class="input-field">
	{{ Form::label('address', 'Dirección') }}
	{{ Form::text('address', null) }}
	@error ('address')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror
</div>

<div class="input-field">
	{{ Form::label('web', 'Pagina Web') }}
	{{ Form::text('web', null) }}
	@error ('web')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror
</div>

<div class="input-field">
	{{ Form::label('cat_id', 'Categoría') }}
	<br>
	{{ Form::select('cat_id' , $cats, null) }}
</div>

<div class="file-field field-input">
	<div class="btn azul">
		<span>Logotipo</span>
		{{ Form::file('file', null) }}	
	</div>
	<div class="file-path-wrapper">
		{{ Form::text('file', null ,['class' => 'file-path'])}}
	</div>
	@error ('file')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror 
</div>
<br>
Redes Sociales
<div class="input-field">
	{{ Form::label('facebook', 'Facebook') }}
	{{ Form::text('facebook', null) }}
	@error ('facebook')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror
</div>
<div class="input-field">
	{{ Form::label('twitter', 'Twitter') }}
	{{ Form::text('twitter', null) }}
	@error ('twitter')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror
</div>
<div class="input-field">
	{{ Form::label('instagram', 'Instagram') }}
	{{ Form::text('instagram', null) }}
	@error ('instagram')
    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
	@enderror
</div>
<div class="input-field">
	{{ Form::label('linkedin', 'LinkedIn') }}
	{{ Form::text('linkedin', null) }}
	@error ('linkedin')
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