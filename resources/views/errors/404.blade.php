@extends('layouts.app')

@section('title', 'Pagina no encontrada')


@section('content')
<main>
	<section class="section container middle center">
		<h2 class="subtitulo white-text ">Upps</h2>
		<h5 class="azul-text">Parece que no encontramos lo que buscas</h5>
		<a href="{{ route('home') }}" class="btn azul white-text">Regresar</a>
	</section>
</main>
@endsection