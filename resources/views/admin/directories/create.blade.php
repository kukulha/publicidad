@extends('layouts.admin')

@section('title', 'Nueva Etapa')

@section('content')
<main class="admin container">
	<h3 class="azul-text bold">Nueva Empresa</h3>

	{{ Form::open(['route' => 'directories.store', 'method' => 'post', 'files' => 'true']) }}
		@include('admin.directories.partials.form')
	{{ Form::close() }}

</main>
@endsection

