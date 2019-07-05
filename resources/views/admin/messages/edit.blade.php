@extends('layouts.admin')

@section('title', 'Editar Categoría')

@section('content')
<main class="admin container">
	<h3 class="azul-text bold">Editar Etapa</h3>
	<div class="row">
		<div class="col m8 s12 ">
			{{ Form::model($category,['route' => ['categories.update', $category->id], 'method' => 'PUT', 'role' => 'form']) }}
				@include('admin.categories.partials.form')
			{{ Form::close() }}
		</div>
	</div>
</main>
@endsection
