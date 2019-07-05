@extends('layouts.app')

@section('title')
	{{ $post->name }}
@endsection

@section('seo')
<meta name="keywords" content="">
<meta name="description" content="{{ $post->excerpt }}">
<meta name="author" content="{{ $post->user->name }}">
<meta name="designer" content="Kukulha.com">

<!--SEO Facebook -->    
<meta property="og:title" content="{{ $post->name }}">
<meta property="og:description" content="{{ $post->excerpt }}">
<meta property="fb:app_id" content=""/>  
<meta property="og:type" content="article">
<meta property="og:url" content="http://publicidadenlosaltos.com/blog/{{ $post->slug }}">
<meta property="og:image" content="{{ Storage::url($post->file) }}">
<meta property=og:locale content="es_MX">
<meta property="og:site_name" content="{{ config('app.name') }}">

<!--Schema.org-->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "Article",
            "name": "{{ $post->name }}",
            "url": "http://www.publicidadenlosaltos.com/blog/{{ $post->slug }}",
            "image": "{{ Storage::url($post->file) }}",
            "description" : "{{ $post->excerpt }}",
            "author": {
				"@type": "Person",
				"name" : "{{ $post->user->name }}"
        	},
            "datePublished": "{{ $post->created_at }}",
            "dateModified": "{{ $post->updated_at }}",
            "publisher": {
				"@type": "Organization",
				"name" : "Publicidad en los Altos",
				"logo": {
					"@type": "imageObject",
					"url": "http://www.publicidadenlosaltos.com/img/logo.png"
				}
        	},
        	"mainEntityOfPage" : {
				"@type": "WebPage",
				"@id": "http://www.publicidadenlosaltos.com"
        	}
        }
    </script> 
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