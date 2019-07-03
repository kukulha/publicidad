<div class="input-field">
	{{ Form::label('name', 'Nombre de la Etapa') }}
	{{ Form::text('name', null, ['id' => 'name']) }}
</div>

<div class="input-field">
	{{ Form::label('slug', 'URL') }}
	{{ Form::text('slug', null, ['id' => 'slug']) }}
</div>
<div class="input-field">
	{{ Form::submit('Guardar', ['class' => 'btn btn-block azul']) }}
</div>