@extends('layouts.admin')

@section('title', 'Nueva Etapa')

@section('content')
<main class="admin container">
	<h3 class="azul-text bold">Nueva Etapa</h3>
	<div class="row">
		<div class="col m8 s12 ">
			{{ Form::open(['route' => 'stages.store', 'method' => 'post', 'role' => 'form']) }}
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