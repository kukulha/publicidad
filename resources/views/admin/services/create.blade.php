@extends('layouts.admin')

@section('title', 'Nueva Etapa')

@section('content')
<main class="admin container">
	<h3 class="azul-text bold">Nuevo Servicio</h3>

	{{ Form::open(['route' => 'services.store', 'method' => 'post', 'files' => 'true']) }}
		@include('admin.services.partials.form')
	{{ Form::close() }}

</main>
@endsection

