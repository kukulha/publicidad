@extends('layouts.admin')

@section('title', 'Editar Etapa')

@section('content')
<main class="admin container">
	<h3 class="azul-text bold">Editar Etapa</h3>
	<div class="row">
		<div class="col m8 s12 ">
			{{ Form::model($cat,['route' => ['cats.update', $cat->id], 'method' => 'PUT', 'role' => 'form']) }}
				@include('admin.cats.partials.form')
			{{ Form::close() }}
		</div>
	</div>
</main>
@endsection
