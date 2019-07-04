@extends('layouts.app')

@section('title')
	{{ $post->name }}
@endsection


@section('content')
<main>
	<article class="section container">
		<div class="center">
		<h2 class="subtitulo white-text">{{ $post->name }}</h2>
		<br>
		<img src="{{ Storage::url($post->file2) }}" class="responsive-img" alt="{{ $post->name }}">
		<p class="small azul-text">Autor: {{ $post->user->name }}</p>
		<p class="small azul-text">Fecha: {{ $post->created_at->format('d \d\e M, Y') }}</p>
		<hr class="divider azul">
		</div>
		<p class="azul-text">{!! $post->body !!}</p>
		<hr class="divider azul">
		<p class="azul-text">Categoria: <a href="{{ route('category', $post->category->slug) }}" class="rojo-text">{{ $post->category->name }}</a></p>
	</article>
</main>
@endsection