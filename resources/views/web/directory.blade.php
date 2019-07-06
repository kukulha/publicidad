@extends('layouts.app')

@section('title', 'Las mejores empresas en los Altos de Jalisco')

@section('content')
<main>
	<section class="section container center">
		<div class="row">
			<div class="col m8 s12 offset-m2">
				<h2 class="subtitulo white-text title">Directorio</h2>
				<br>
				<h5 class="rojo-text">Categorias</h5>
				<div class="center section">
					@foreach($cats as $cat)
						<a href="{{ route('cat', $cat->slug) }}" class="btn azul white-text mb">{{ $cat->name }}</a>
					@endforeach
					<a href="{{ route('directory') }}" class="btn azul white-text mb">Todos</a>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($directories as $directory)
			<div class="col m4 s12">
				<div class="card">
					<div class="card-image">
						<a href="#{{ $directory->slug }}" class="modal-trigger">
							<img src="{{ Storage::url($directory->file) }}" class="responsive-img waves-effect waves-block waves-light" alt="{{ $directory->name }}">
						</a>
					</div>
				</div>
			</div>

			<!-- Modal Structure -->
			<div id="{{ $directory->slug }}" class="modal">
			    <div class="modal-content">
			    	<h3 class="section title azul-text bold"></h3>
			    	<div class="center">
			    		<img src="{{ Storage::url($directory->file) }}" class="responsive-img" alt="{{ $directory->name }}">
			    	</div>
			    	<div class="row">
			    		<div class="col m6 s12 offset-m3 left-align">
			    			<p class="azul-text bold">{{ $directory->name }}</p>
			    			<p class="azul-text">Dirección: {{ $directory->address }}</p>
		    				<p class="azul-text">Teléfono: <a class="rojo-text" href="tel:{{  $directory->phone }}">{{ $directory->phone }}</a></p>
		    				<p class="azul-text">Correo: <a class="rojo-text" href="mailto:{{ $directory->email }}">{{ $directory->email }}</a></p>
		    				<p class="azul-text">Pagina Web: <a class="rojo-text" href="{{ $directory->web }}">{{ $directory->web }}</a></p>
		    				<p class="azul-text">{!! $directory->description !!}</p>
		    				<div class="iconos center">
		    					@if($directory->facebook)
		    					<a href="{{ $directory->facebook }}"><i class="fab fa-facebook-f small icon f"></i></a>
		    					@endif
		    					@if($directory->twitter)
		    					<a href="{{ $directory->twitter }}"><i class="fab fa-twitter small icon t"></i></a>
		    					@endif
		    					@if($directory->instagram)
		    					<a href="{{ $directory->instagram }}"><i class="fab fa-instagram small icon i"></i></a>
		    					@endif
		    					@if($directory->linkedin)
		    					<a href="{{ $directory->linkedin }}"><i class="fab fa-linkedin small icon l"></i></a>
		    					@endif
		    				</div>
			    		</div>
			    	</div>
			    </div>
			</div>
			@endforeach
		</div>
	</section>
</main>

@endsection

@section('scripts')
	
	<script>
		$(window).scroll(function() {
	if ($("#menu2").offset().top > 64) {
	    $("#menu2").addClass("white");
	    $("#menu2").removeClass("transparent");
	} else {
	    $("#menu2").removeClass("white");
	    $("#menu2").addClass("transparent");
	}
});

	</script>
@endsection