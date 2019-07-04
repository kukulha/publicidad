@extends('layouts.admin')

@section('title', 'Nuevo Articulo')

@section('content')
<main class="admin container">
	<h3 class="azul-text bold">Nuevo Articulo</h3>

	{{ Form::open(['route' => 'posts.store', 'method' => 'post', 'files' => 'true']) }}
		@include('admin.posts.partials.form')
	{{ Form::close() }}

</main>
@endsection

