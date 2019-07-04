@extends('layouts.admin')

@section('title', 'Editar Articulo')

@section('content')
<main class="admin container">
	<h3 class="azul-text bold">Editar Articulo</h3>

			{{ Form::model($post,['route' => ['posts.update', $post->id], 'method' => 'PUT', 'role' => 'form', 'files' => 'true']) }}
				@include('admin.posts.partials.form')
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