@extends('layouts.app')

@section('title', 'Ultimas Noticias')

@section('content')
<main>
	<section class="section container center">
		<div class="row">
			<div class="col m8 s12 offset-m2">
				<h2 class="subtitulo white-text title">Articulos</h2>
				<br>
				<h5 class="rojo-text">Categorias</h5>
				<div class="center section">
					@foreach($categories as $category)
						<a href="{{ route('category', $category->slug) }}" class="btn azul white-text mb">{{ $category->name }}</a>
					@endforeach
					<a href="{{ route('blog') }}" class="btn azul white-text mb">Todos</a>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($posts as $post)
				<div class="col m4 s12">
					<div class="card">
						<div class="card-image">
							<img src="{{ Storage::url($post->file) }}" alt="{{ $post->name }}">
						</div>
						<div class="card-content">
							<a href="{{ route('post', $post->slug) }}" class="title azul-text bold">{{ $post->name }}</a>
							<p class="azul-text">{{ $post->excerpt }}</p>
						</div>
						<div class="card-action">
							<a href="{{ route('post', $post->slug) }}" class="btn rojo white-text">Leer más</a>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</section>
</main>
@endsection
