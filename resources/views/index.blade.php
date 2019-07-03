@extends('layouts.app')

@section('title', 'Lo mejor en proyectos de comunicación')

@section('content')
<header>
	<div class="hero">
		<div class="valign-wrapper">
			<div class="center container">
				<div class="row">
					<div class="col m8 s12 offset-m2">
						<h4 class="white-text">“Contamos con la experiencia y las herramientas necesarias para llevar a cabo tus Proyectos de publicidad”</h4>
						<a href="" class="btn azul white-text">Conoce nuestros servicios</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<main>
	<section class="section container center">
		<h4 class="rojo-text bold">En Publicidad en los Altos</h4>
		<h5 class="azul-text">Sabemos de la importancia de generar contenido para tu empresa, por eso hemos especializado nuestros esfuerzos de marketing publicitario generando un entorno creativo para desarrollar tu proyectos de comunicación</h5>
		<h3 class="azul-text bold">¿Comenzamos Juntos?</h3>
	</section>

	<section class="section">
		<div class="row">
			<div class="col m3 s12">
				<div class="contenido">
					<img src="/img/contenido.jpg" class="responsive-img image" alt="">
					<div class="middle center">
						<h4 class="texto bold">Genera + <br>Prospectos</h4>
					</div>
				</div>
			</div>
			<div class="col m3 s12">
				<div class="contenido">
					<img src="/img/contenido.jpg" class="responsive-img image" alt="">
					<div class="middle center">
						<h5 class="texto bold">Da una mejor imagen a tu empresa</h5>
					</div>
				</div>
			</div>
			<div class="col m3 s12">
				<div class="contenido">
					<img src="/img/contenido.jpg" class="responsive-img image" alt="">
					<div class="middle center">
						<h4 class="texto bold">Aumenta tu Productividad</h4>
					</div>
				</div>
			</div>
			<div class="col m3 s12">
				<div class="contenido">
					<img src="/img/contenido.jpg" class="responsive-img image" alt="">
					<div class="middle center">
						<h4 class="texto bold">Aumenta el Alcance</h4>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section ">
		<div class="container">
			<h4 class="gris-text center title bold">¡Nos emociona</h4>
			<h2 class="azul-text center title bold">tu proyecto!</h2>
		</div>
		<div class="section azul center">
			<a href="" class="btn white azul-text">Manda tu mensaje</a>
			<p class="white-text">*En una máximo de 24 horas sabrás de nosotros*</p>
		</div>
	</section>
	

	<section class="section center container">
		<div class="row">
			<h4 class="gris-text center  bold">Todo nace a partir del Status de tu empresa</h4>
			<h2 class="rojo-text center title bold">Iniciando tu empresa</h2>

			@foreach($initial as $service)
				<div class="col m6 s12">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img src="{{Storage::url($service->file)}}" class="responsive-img activator" alt="">
					</div>
					<div class="card-reveal claro">
      					<span class="card-title grey-text text-darken-4"><i class="material-icons center">close</i></span>
      					<div class="section  middle center">
      						<h4 class="azul-text bold title">{{ $service->name }} </h4>
      						<a href="#{{ $service->slug }}" class="btn rojo white-text modal-trigger">Quiero mi {{ $service->name }}</a>
      					</div>
    				</div>
				</div>
			</div>
			<!-- Modal Structure -->
			<div id="{{ $service->slug }}" class="modal">
			    <div class="modal-content">
			    	<h3 class="section title azul-text bold">{{ $service->name }}</h3>
			    	<p class="small italic">'{{ $service->subtitle }}'</p>
			    	<div class="row">
			    		<div class="col m6 s12">
			    			<img src="{{ Storage::url($service->file2) }}" class="responsive-img" alt="">
			    		</div>
			    		<div class="col m6 s12">
			    			
			    			<div class="left-align">
			    				<h4 class="azul-text">Descripción</h4>
				    			<div class="browser-default">{!! $service->description !!}</div>
			    			</div>
			    			
			    		</div>
			    	</div>
			    </div>
			    <div class="modal-footer azul">
			    	<a href="" class="btn btn-block rojo white-text">Lo quiero</a>
				</div>
			</div>
			@endforeach
			
		</div>

		<div class="row">
			<h3 class="rojo-text center title bold">Personalización de tu empresa</h2>
			<h4 class="gris-text center  bold">¡Qué bien! Vamos creciendo</h4>
			@foreach($customize as $service)
				<div class="col m6 s12">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img src="{{Storage::url($service->file)}}" class="responsive-img activator" alt="">
					</div>
					<div class="card-reveal claro">
      					<span class="card-title grey-text text-darken-4"><i class="material-icons center">close</i></span>
      					<div class="section  middle center">
      						<h4 class="azul-text bold title">{{ $service->name }}</h4>
      						<a href="#{{ $service->slug }}" class="btn rojo white-text modal-trigger">Quiero mi {{ $service->name }}</a>
      					</div>
    				</div>
				</div>
			</div>
			<!-- Modal Structure -->
			<div id="{{ $service->slug }}" class="modal">
			    <div class="modal-content">
			    	<h3 class="section title azul-text bold">{{ $service->name }}</h3>
			    	<p class="small italic">'{{ $service->subtitle }}'</p>
			    	<div class="row">
			    		<div class="col m6 s12">
			    			<img src="{{ Storage::url($service->file2) }}" class="responsive-img" alt="">
			    		</div>
			    		<div class="col m6 s12">
			    			
			    			<div class="left-align">
			    				<h4 class="azul-text">Descripción</h4>
				    			<div class="browser-default">{!! $service->description !!}</div>
			    			</div>
			    			
			    		</div>
			    	</div>
			    </div>
			    <div class="modal-footer azul">
			    	<a href="" class="btn btn-block rojo white-text">Lo quiero</a>
				</div>
			</div>
			@endforeach
		</div>

		<div class="row">
			<h3 class="rojo-text center title bold">Promoción de Ventas</h2>
			<h4 class="gris-text center  bold">Informemos a tus clientes</h4>
			@foreach($promotion as $service)
				<div class="col m6 s12">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img src="{{Storage::url($service->file)}}" class="responsive-img activator" alt="">
					</div>
					<div class="card-reveal claro">
      					<span class="card-title grey-text text-darken-4"><i class="material-icons center">close</i></span>
      					<div class="section middle center">
      						<h4 class="azul-text bold title">{{ $service->name }}</h4>
      						<a href="#{{ $service->slug }}" class="btn rojo white-text modal-trigger">Quiero mi {{ $service->name }}</a>
      					</div>
    				</div>
				</div>
			</div>
			<!-- Modal Structure -->
			<div id="{{ $service->slug }}" class="modal">
			    <div class="modal-content">
			    	<h3 class="section title azul-text bold">{{ $service->name }}</h3>
			    	<p class="small italic">'{{ $service->subtitle }}'</p>
			    	<div class="row">
			    		<div class="col m6 s12">
			    			<img src="{{ Storage::url($service->file2) }}" class="responsive-img" alt="">
			    		</div>
			    		<div class="col m6 s12">
			    			
			    			<div class="left-align">
			    				<h4 class="azul-text">Descripción</h4>
				    			<div class="browser-default">{!! $service->description !!}</div>
			    			</div>
			    			
			    		</div>
			    	</div>
			    </div>
			    <div class="modal-footer azul">
			    	<a href="" class="btn btn-block rojo white-text">Lo quiero</a>
				</div>
			</div>
			@endforeach
		</div>

		<div class="row">
			<h3 class="rojo-text center title bold">Proyectos</h2>
			<h4 class="gris-text center  bold">Reforcemos tu Marca</h4>
			@foreach($project as $service)
				<div class="col m6 s12">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img src="{{Storage::url($service->file)}}" class="responsive-img activator" alt="">
					</div>
					<div class="card-reveal claro">
      					<span class="card-title grey-text text-darken-4"><i class="material-icons center">close</i></span>
      					<div class="section middle center">
      						<h4 class="azul-text bold title">{{ $service->name }}</h4>
      						<a href="#{{ $service->slug }}" class="btn rojo white-text modal-trigger">Quiero mi {{ $service->name }}</a>
      					</div>
    				</div>
				</div>
			</div>
			<!-- Modal Structure -->
			<div id="{{ $service->slug }}" class="modal">
			    <div class="modal-content">
			    	<h3 class="section title azul-text bold">{{ $service->name }}</h3>
			    	<p class="small italic">'{{ $service->subtitle }}'</p>
			    	<div class="row">
			    		<div class="col m6 s12">
			    			<img src="{{ Storage::url($service->file2) }}" class="responsive-img" alt="">
			    		</div>
			    		<div class="col m6 s12">
			    			
			    			<div class="left-align">
			    				<h4 class="azul-text">Descripción</h4>
				    			<div class="browser-default">{!! $service->description !!}</div>
			    			</div>
			    			
			    		</div>
			    	</div>
			    </div>
			    <div class="modal-footer azul">
			    	<a href="" class="btn btn-block rojo white-text">Lo quiero</a>
				</div>
			</div>
			@endforeach
		</div>
	</section>

	<section class="section container center">
		<div class="row">
			<div class="col m8 s12 offset-m2">
				<h5 class="azul white-text title bold section">Te administramos tus redes sociales</h4>
				<h3 class="rojo-text title bold">Desde 300MXN mensuales</h3>
				<h5 class="gris-text center  bold">Tu Marca, Tu Community Manager</h5>
			</div>
		</div>
	</section>
</main>
@endsection


@section('scripts')
	<script>
		$(window).scroll(function() {
	if ($("#menu").offset().top > $( window ).height()) {
	    $("#menu").addClass("azul");
	    $("#menu").removeClass("transparent");
	} else {
	    $("#menu").removeClass("azul");
	    $("#menu").addClass("transparent");
	}
});
	</script>
@endsection