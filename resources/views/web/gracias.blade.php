@extends('layouts.app')

@section('title')
Gracias,{{ session('name') }}
@endsection

@section('content')
<main>
	<section class="section container middle center">
		<h2 class="subtitulo white-text ">Gracias</h2>
		<h2 class="azul-text">{{ session('name') }}</h2>
		<h5 class="azul-text">En unos momentos un asesor se pondra en contacto contigo <br></h5>
		<a href="{{ route('home') }}" class="btn azul white-text">Regresar</a>
	</section>
</main>
@endsection