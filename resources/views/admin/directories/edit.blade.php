@extends('layouts.admin')

@section('title', 'Editar Etapa')

@section('content')
<main class="admin container">
	<h3 class="azul-text bold">Editar Etapa</h3>

			{{ Form::model($directory,['route' => ['directories.update', $directory->id], 'method' => 'PUT', 'role' => 'form', 'files' => 'true']) }}
				@include('admin.directories.partials.form')
			{{ Form::close() }}
</main>
@endsection

@section('scripts')
	<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
	<script>
		$(document).ready(function(){
			$('#name, #slug').stringToSlug({
				callback: function(text){
					$('#slug').val(text);
				}
			});
		});
	</script>
@endsection