@extends('layouts.app')

@section('title', 'Lo mejor en proyectos de comunicación')

@section('seo')
<meta name="keywords" content="">
<meta name="description" content="Sabemos de la importancia de generar contenido para tu empresa, por eso hemos especializado nuestros esfuerzos de marketing publicitario generando un entorno creativo para desarrollar tu proyectos de comunicación">
<meta name="author" content="Kukulha.com">
<meta name="designer" content="Kukulha.com">

<!--SEO Facebook -->    
<meta property="og:title" content="{{ config('app.name') }}">
<meta property="og:description" content="Sabemos de la importancia de generar contenido para tu empresa, por eso hemos especializado nuestros esfuerzos de marketing publicitario generando un entorno creativo para desarrollar tu proyectos de comunicación">
<meta property="fb:app_id" content=""/>  
<meta property="og:type" content="website">
<meta property="og:url" content="http://publicidadenlosaltos.com/">
<meta property="og:image" content="http://publicidadenlosaltos.com/favicon.ico">
<meta property=og:locale content="es_MX">
<meta property="og:site_name" content="{{ config('app.name') }}">

<!--SEO Twitter -->    
<meta property=twitter:card content="summary">
<meta property=twitter:title content="{{ config('app.name') }}">
<meta property=twitter:description content="Sabemos de la importancia de generar contenido para tu empresa, por eso hemos especializado nuestros esfuerzos de marketing publicitario generando un entorno creativo para desarrollar tu proyectos de comunicación">
<meta property=twitter:creator content="@Kukulha">
<meta property=twitter:url content="http://publicidadenlosaltos.com">
<meta property=twitter:image content="http://publicidadenlosaltos.com/favicon.ico">

<!--Schema.org-->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "LocalBusiness",
            "name": "Publicidad en los Altos",
            "url": "http://www.publicidadenlosaltos.com",
            "image": "http://publicidadenlosaltos.com/img/logo.png",
            "description" : "Sabemos de la importancia de generar contenido para tu empresa, por eso hemos especializado nuestros esfuerzos de marketing publicitario generando un entorno creativo para desarrollar tu proyectos de comunicación",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Tepatitlán",
                "addressRegion": "MX-JAL",
                "postalCode": "47670",
                "streetAddress": "Aldama 616 A"
            },
            "telephone": "+52 3787154957",
            "priceRange": "$"
        }
    </script> 
@endsection

@section('content')
<header>
	<div class="hero">
		<div class="valign-wrapper">
			<div class="center container">
				<div class="row">
					<div class="col m8 s12 offset-m2">
						<h4 class="white-text">“Contamos con la experiencia y las herramientas necesarias para llevar a cabo tus Proyectos de publicidad”</h4>
						<a href="#servicios" class="btn azul white-text">Conoce nuestros servicios</a>
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
					<img src="/img/contenido.jpg" class="responsive-img image" alt="Genera Prospectos">
					<div class="middle center">
						<h4 class="texto bold">Genera + <br>Prospectos</h4>
					</div>
				</div>
			</div>
			<div class="col m3 s12">
				<div class="contenido">
					<img src="/img/imagen.jpg" class="responsive-img image" alt="Da una mejor imagen a tu empresa">
					<div class="middle center">
						<h5 class="texto bold">Da una mejor imagen a tu empresa</h5>
					</div>
				</div>
			</div>
			<div class="col m3 s12">
				<div class="contenido">
					<img src="/img/productividad.jpg" class="responsive-img image" alt="Aumenta tu Productividad">
					<div class="middle center">
						<h4 class="texto bold">Aumenta tu Productividad</h4>
					</div>
				</div>
			</div>
			<div class="col m3 s12">
				<div class="contenido">
					<img src="/img/alcance.jpg" class="responsive-img image" alt="Aumenta el Alcance">
					<div class="middle center">
						<h4 class="texto bold">Aumenta el Alcance</h4>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<h4 class="gris-text center title bold">¡Nos emociona!</h4>
		</div>
		<div class="section azul center">
			<a href="https://api.whatsapp.com/send?phone=523781511553" class="btn white azul-text">Manda tu mensaje</a>
			<p class="white-text">*En una máximo de 24 horas sabrás de nosotros*</p>
		</div>
	</section>

	
	<section class="section center container scrollspy" id="servicios">
		<h2 class="red-text title bold">Cuentanos en que etapa se encuentra tu empresa</h2>
		<div class="row hide-on-med-and-down">
			<ul class="tabs">
				<li class="tab">
					<li class="tab col m3 s12"><a class="active" href="#service">Iniciando tu empresa</a></li>
					<li class="tab col m3 s12"><a href="#custom">Personalización</a></li>
					<li class="tab col m3 s12"><a href="#promo">Promoción</a></li>
					<li class="tab col m3 s12"><a href="#proyect">Proyectos</a></li>
				</li>
			</ul>

			<div id="service" class="col s12">
				<h4 class="gris-text center  bold">Todo nace a partir del Status de tu empresa</h4>
				@foreach($initial as $service)
				<div class="col m6 s12" id="servicio">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img src="{{Storage::url($service->file)}}" class="responsive-img activator" alt="{{ $service->name }}">
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
				    	<p class="small italic">{{ $service->subtitle }}</p>
				    	<div class="row">
				    		<div class="col m6 s12">
				    			<img src="{{ Storage::url($service->file2) }}" class="responsive-img" alt="{{ $service->name }}">
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
				    	<a href="#{{$service->name}}" class="btn btn-block rojo white-text modal-trigger modal-close">Lo quiero</a>
					</div>
				</div>
				<!-- Modal Structure -->
				<div id="{{$service->name}}" class="modal">
					{{ Form::open(['route' => 'messages.store', 'method' => 'POST', 'role' => 'form']) }}
				    <div class="modal-content">
				    	<h3 class="section title azul-text bold">Contacto</h3>
				    	<div class="row">
				    		<div class="col m6 offset-m3 s12">
				    			<div class="left-align">
					    				<div class="input-field">
					    					{{ Form::label('name', 'Nombre') }}
					    					{{ Form::text('name', null) }}
					    				</div>
					    				<div class="input-field">
					    					{{ Form::label('email', 'Correo') }}
					    					{{ Form::email('email', null) }}
					    				</div>
					    				<div class="input-field">
					    					<label for="phone">Telefono</label>
					    					<input type="tel" name="phone" >
					    				</div>
					    			<input type="hidden" name="service" value="{{ $service->name }}">
					    			
				    			</div>
				    			
				    		</div>
				    	</div>
				    </div>
				    <div class="modal-footer azul">
				    	{{ Form::submit('Enviar', ['class' => 'btn btn-block rojo white-text'])  }}
					</div>
					{{ Form::close() }}
				</div>
				@endforeach
			</div>
			
			<div id="custom" class="col s12">
				<h4 class="gris-text center  bold">¡Qué bien! Vamos creciendo</h4>
				@foreach($customize as $service)
				<div class="col m6 s12">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img src="{{Storage::url($service->file)}}" class="responsive-img activator" alt="{{ $service->name }}">
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
				    	<p class="small italic">{{ $service->subtitle }}</p>
				    	<div class="row">
				    		<div class="col m6 s12">
				    			<img src="{{ Storage::url($service->file2) }}" class="responsive-img" alt="{{ $service->name }}">
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
				    	<a href="#{{$service->name}}" class="btn btn-block rojo white-text">Lo quiero</a>
					</div>
				</div>
				<!-- Modal Structure -->
				<div id="{{$service->name}}" class="modal">
					{{ Form::open(['route' => 'messages.store', 'method' => 'POST', 'role' => 'form']) }}
				    <div class="modal-content">
				    	<h3 class="section title azul-text bold">Contacto</h3>
				    	<div class="row">
				    		<div class="col m6 offset-m3 s12">
				    			<div class="left-align">
					    				<div class="input-field">
					    					{{ Form::label('name', 'Nombre') }}
					    					{{ Form::text('name', null) }}
					    				</div>
					    				<div class="input-field">
					    					{{ Form::label('email', 'Correo') }}
					    					{{ Form::email('email', null) }}
					    				</div>
					    				<div class="input-field">
					    					<label for="phone">Telefono</label>
					    					<input type="tel" name="phone" >
					    				</div>
					    			<input type="hidden" name="service" value="{{ $service->name }}">
					    			
				    			</div>
				    			
				    		</div>
				    	</div>
				    </div>
				    <div class="modal-footer azul">
				    	{{ Form::submit('Enviar', ['class' => 'btn btn-block rojo white-text'])  }}
					</div>
					{{ Form::close() }}
				</div>
				@endforeach
			</div>

			<div id="promo" class="col s12">
				<h4 class="gris-text center  bold">Informemos a tus clientes</h4>
				@foreach($promotion as $service)
					<div class="col m6 s12">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img src="{{Storage::url($service->file)}}" class="responsive-img activator" alt="{{ $service->name }}">
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
				    	<p class="small italic">{{ $service->subtitle }}</p>
				    	<div class="row">
				    		<div class="col m6 s12">
				    			<img src="{{ Storage::url($service->file2) }}" class="responsive-img" alt="{{ $service->name }}">
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
				    	<a href="#{{$service->name}}" class="btn btn-block rojo white-text">Lo quiero</a>
					</div>
				</div>
				<!-- Modal Structure -->
				<div id="{{$service->name}}" class="modal">
					{{ Form::open(['route' => 'messages.store', 'method' => 'POST', 'role' => 'form']) }}
				    <div class="modal-content">
				    	<h3 class="section title azul-text bold">Contacto</h3>
				    	<div class="row">
				    		<div class="col m6 offset-m3 s12">
				    			<div class="left-align">
					    				<div class="input-field">
					    					{{ Form::label('name', 'Nombre') }}
					    					{{ Form::text('name', null) }}
					    				</div>
					    				<div class="input-field">
					    					{{ Form::label('email', 'Correo') }}
					    					{{ Form::email('email', null) }}
					    				</div>
					    				<div class="input-field">
					    					<label for="phone">Telefono</label>
					    					<input type="tel" name="phone" >
					    				</div>
					    			<input type="hidden" name="service" value="{{ $service->name }}">
					    			
				    			</div>
				    			
				    		</div>
				    	</div>
				    </div>
				    <div class="modal-footer azul">
				    	{{ Form::submit('Enviar', ['class' => 'btn btn-block rojo white-text'])  }}
					</div>
					{{ Form::close() }}
				</div>
				@endforeach
			</div>

			<div id="proyect" class="col s12">
				<h4 class="gris-text center  bold">Reforcemos tu Marca</h4>
				@foreach($project as $service)
					<div class="col m6 s12">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img src="{{Storage::url($service->file)}}" class="responsive-img activator" alt="{{ $service->name }}">
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
				    	<p class="small italic">{{ $service->subtitle }}</p>
				    	<div class="row">
				    		<div class="col m6 s12">
				    			<img src="{{ Storage::url($service->file2) }}" class="responsive-img" alt="{{ $service->name }}">
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
				    	<a href="#{{$service->name}}" class="btn btn-block rojo white-text">Lo quiero</a>
					</div>
				</div>
				<!-- Modal Structure -->
				<div id="{{$service->name}}" class="modal">
					{{ Form::open(['route' => 'messages.store', 'method' => 'POST', 'role' => 'form']) }}
				    <div class="modal-content">
				    	<h3 class="section title azul-text bold">Contacto</h3>
				    	<div class="row">
				    		<div class="col m6 offset-m3 s12">
				    			<div class="left-align">
					    				<div class="input-field">
					    					{{ Form::label('name', 'Nombre') }}
					    					{{ Form::text('name', null) }}
					    				</div>
					    				<div class="input-field">
					    					{{ Form::label('email', 'Correo') }}
					    					{{ Form::email('email', null) }}
					    				</div>
					    				<div class="input-field">
					    					<label for="phone">Telefono</label>
					    					<input type="tel" name="phone" >
					    				</div>
					    			<input type="hidden" name="service" value="{{ $service->name }}">
					    			
				    			</div>
				    			
				    		</div>
				    	</div>
				    </div>
				    <div class="modal-footer azul">
				    	{{ Form::submit('Enviar', ['class' => 'btn btn-block rojo white-text'])  }}
					</div>
					{{ Form::close() }}
				</div>
				@endforeach
			</div>
			
		</div>

		<div class="row hide-on-med-and-up show-on-small">
			<div id="service" class="col s12">
				<h4 class="rojo-text center bold title">Iniciando tu empresa</h4>
				<h4 class="gris-text center bold">Todo nace a partir del Status de tu empresa</h4>
				@foreach($initial as $service)
				<div class="col m6 s12" id="servicio">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img src="{{Storage::url($service->file)}}" class="responsive-img activator" alt="{{ $service->name }}">
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
				    	<p class="small italic">{{ $service->subtitle }}</p>
				    	<div class="row">
				    		<div class="col m6 s12">
				    			<img src="{{ Storage::url($service->file2) }}" class="responsive-img" alt="{{ $service->name }}">
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
				    	<a href="#{{$service->name}}" class="btn btn-block rojo white-text modal-trigger modal-close">Lo quiero</a>
					</div>
				</div>
				<!-- Modal Structure -->
				<div id="{{$service->name}}" class="modal">
					{{ Form::open(['route' => 'messages.store', 'method' => 'POST', 'role' => 'form']) }}
				    <div class="modal-content">
				    	<h3 class="section title azul-text bold">Contacto</h3>
				    	<div class="row">
				    		<div class="col m6 offset-m3 s12">
				    			<div class="left-align">
					    				<div class="input-field">
					    					{{ Form::label('name', 'Nombre') }}
					    					{{ Form::text('name', null) }}
					    				</div>
					    				<div class="input-field">
					    					{{ Form::label('email', 'Correo') }}
					    					{{ Form::email('email', null) }}
					    				</div>
					    				<div class="input-field">
					    					<label for="phone">Telefono</label>
					    					<input type="tel" name="phone" >
					    				</div>
					    			<input type="hidden" name="service" value="{{ $service->name }}">
					    			
				    			</div>
				    			
				    		</div>
				    	</div>
				    </div>
				    <div class="modal-footer azul">
				    	{{ Form::submit('Enviar', ['class' => 'btn btn-block rojo white-text'])  }}
					</div>
					{{ Form::close() }}
				</div>
				@endforeach
			</div>

			<div id="custom" class="col s12">
				<h4 class="rojo-text center bold title">Personaliza tu empresa</h4>
				<h4 class="gris-text center  bold">¡Qué bien! Vamos creciendo</h4>
				@foreach($customize as $service)
				<div class="col m6 s12">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img src="{{Storage::url($service->file)}}" class="responsive-img activator" alt="{{ $service->name }}">
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
				    	<p class="small italic">{{ $service->subtitle }}</p>
				    	<div class="row">
				    		<div class="col m6 s12">
				    			<img src="{{ Storage::url($service->file2) }}" class="responsive-img" alt="{{ $service->name }}">
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
				    	<a href="#{{$service->name}}" class="btn btn-block rojo white-text">Lo quiero</a>
					</div>
				</div>
				<!-- Modal Structure -->
				<div id="{{$service->name}}" class="modal">
					{{ Form::open(['route' => 'messages.store', 'method' => 'POST', 'role' => 'form']) }}
				    <div class="modal-content">
				    	<h3 class="section title azul-text bold">Contacto</h3>
				    	<div class="row">
				    		<div class="col m6 offset-m3 s12">
				    			<div class="left-align">
					    				<div class="input-field">
					    					{{ Form::label('name', 'Nombre') }}
					    					{{ Form::text('name', null) }}
					    				</div>
					    				<div class="input-field">
					    					{{ Form::label('email', 'Correo') }}
					    					{{ Form::email('email', null) }}
					    				</div>
					    				<div class="input-field">
					    					<label for="phone">Telefono</label>
					    					<input type="tel" name="phone" >
					    				</div>
					    			<input type="hidden" name="service" value="{{ $service->name }}">
					    			
				    			</div>
				    			
				    		</div>
				    	</div>
				    </div>
				    <div class="modal-footer azul">
				    	{{ Form::submit('Enviar', ['class' => 'btn btn-block rojo white-text'])  }}
					</div>
					{{ Form::close() }}
				</div>
				@endforeach
			</div>

			<div id="promo" class="col s12">
				<h4 class="rojo-text center bold title">Promoción de ventas</h4>
				<h4 class="gris-text center  bold">Informemos a tus clientes</h4>
				@foreach($promotion as $service)
					<div class="col m6 s12">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img src="{{Storage::url($service->file)}}" class="responsive-img activator" alt="{{ $service->name }}">
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
				    	<p class="small italic">{{ $service->subtitle }}</p>
				    	<div class="row">
				    		<div class="col m6 s12">
				    			<img src="{{ Storage::url($service->file2) }}" class="responsive-img" alt="{{ $service->name }}">
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
				    	<a href="#{{$service->name}}" class="btn btn-block rojo white-text">Lo quiero</a>
					</div>
				</div>
				<!-- Modal Structure -->
				<div id="{{$service->name}}" class="modal">
					{{ Form::open(['route' => 'messages.store', 'method' => 'POST', 'role' => 'form']) }}
				    <div class="modal-content">
				    	<h3 class="section title azul-text bold">Contacto</h3>
				    	<div class="row">
				    		<div class="col m6 offset-m3 s12">
				    			<div class="left-align">
					    				<div class="input-field">
					    					{{ Form::label('name', 'Nombre') }}
					    					{{ Form::text('name', null) }}
					    				</div>
					    				<div class="input-field">
					    					{{ Form::label('email', 'Correo') }}
					    					{{ Form::email('email', null) }}
					    				</div>
					    				<div class="input-field">
					    					<label for="phone">Telefono</label>
					    					<input type="tel" name="phone" >
					    				</div>
					    			<input type="hidden" name="service" value="{{ $service->name }}">
					    			
				    			</div>
				    			
				    		</div>
				    	</div>
				    </div>
				    <div class="modal-footer azul">
				    	{{ Form::submit('Enviar', ['class' => 'btn btn-block rojo white-text'])  }}
					</div>
					{{ Form::close() }}
				</div>
				@endforeach
			</div>

			<div id="proyect" class="s12">
				<h4 class="rojo-text center bold title">Proyectos</h4>
				<h4 class="gris-text center bold">Reforcemos tu Marca</h4>
				@foreach($project as $service)
					<div class="col m6 s12">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img src="{{Storage::url($service->file)}}" class="responsive-img activator" alt="{{ $service->name }}">
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
				    	<p class="small italic">{{ $service->subtitle }}</p>
				    	<div class="row">
				    		<div class="col m6 s12">
				    			<img src="{{ Storage::url($service->file2) }}" class="responsive-img" alt="{{ $service->name }}">
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
				    	<a href="#{{$service->name}}" class="btn btn-block rojo white-text">Lo quiero</a>
					</div>
				</div>
				<!-- Modal Structure -->
				<div id="{{$service->name}}" class="modal">
					{{ Form::open(['route' => 'messages.store', 'method' => 'POST', 'role' => 'form']) }}
				    <div class="modal-content">
				    	<h3 class="section title azul-text bold">Contacto</h3>
				    	<div class="row">
				    		<div class="col m6 offset-m3 s12">
				    			<div class="left-align">
					    				<div class="input-field">
					    					{{ Form::label('name', 'Nombre') }}
					    					{{ Form::text('name', null) }}
					    				</div>
					    				<div class="input-field">
					    					{{ Form::label('email', 'Correo') }}
					    					{{ Form::email('email', null) }}
					    				</div>
					    				<div class="input-field">
					    					<label for="phone">Telefono</label>
					    					<input type="tel" name="phone" >
					    				</div>
					    			<input type="hidden" name="service" value="{{ $service->name }}">
					    			
				    			</div>
				    			
				    		</div>
				    	</div>
				    </div>
				    <div class="modal-footer azul">
				    	{{ Form::submit('Enviar', ['class' => 'btn btn-block rojo white-text'])  }}
					</div>
					{{ Form::close() }}
				</div>
				@endforeach
			</div>
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