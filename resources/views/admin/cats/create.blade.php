@extends('layouts.admin')

@section('title', 'Nueva Etapa')

@section('content')
<main class="admin container">
	<h3 class="azul-text bold">Nueva Categoría</h3>
	<div class="row">
		<div class="col m8 s12 ">
			{{ Form::open(['route' => 'cats.store', 'method' => 'post', 'role' => 'form']) }}
				@include('admin.cats.partials.form')
			{{ Form::close() }}
		</div>
	</div>
</main>
@endsection

