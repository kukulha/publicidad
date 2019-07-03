@extends('layouts.admin')

@section('title', 'Editar Etapa')

@section('content')
<main class="admin container">
	<h3 class="azul-text bold">Editar Etapa</h3>
	<div class="row">
		<div class="col m8 s12 ">
			{{ Form::model($stage,['route' => ['stages.update', $stage->id], 'method' => 'PUT', 'role' => 'form']) }}
				@include('admin.stages.partials.form')
			{{ Form::close() }}
		</div>
	</div>
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