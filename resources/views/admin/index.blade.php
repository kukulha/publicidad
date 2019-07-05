@extends('layouts.admin')

@section('title', 'Panel de Administración')

@section('content')
<main class="admin container">
	<h3 class="azul-text center">Panel de Administración</h2>
	<section class="section section-daily-stats center">
		<div class="row">
			<div class="col m4 s12">
				<div class="card-panel azul white-text center">
					<i class="material-icons medium">email</i>
					<h5>Mensajes</h5>
					<h3 class="count">{{$messages->count()}}</h3>

				</div>
			</div>

			<div class="col m4 s12">
				<div class="card-panel rojo white-text center">
					<i class="material-icons medium">assignment</i>
					<h5>Posts</h5>
					<h3 class="count">{{$posts->count()}}</h3>
				</div>
			</div>

			<div class="col m4 s12">
				<div class="card-panel azul white-text center">
					<i class="material-icons medium">filter_list</i>
					<h5>Servicios</h5>
					<h3 class="count">{{$services->count()}}</h3>
				</div>
			</div>
		</div>
	</section>

	<section class="section center">
		<canvas id="visitorsChart" width="400" height="200"></canvas>
	</section>

	<section class="section">
		<ul class="collection with-header">
			<li class="collection-header"><h2 class="verde-text">Ultimos Mensajes</h2></li>
			@if($messages->count() === 0)
			<li class="collection-item"><em>No hay mensajes</em></li>
			@else
			<li class="collection-item">
				<table>
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Fecha</th>
							<th colspan="2">Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($messages as $message)
						<tr>
							<td>{{$message->name}}</td>
							<td>{{$message->created_at->format('d \\d\\e M Y')}}</td>
							<td width="10px"><a  href="{{ route('messages.show', $message->id) }}" class="btn azul white-text ">Ver</a></td>
							<td width="10px">
								{!! Form::open(['route' => ['messages.destroy', $message->id], 'method' => 'DELETE']) !!}
									<button  class="btn rojo white-text ">Eliminar</button>
								{!! Form::close() !!}
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</li>
			@endif
		</ul>
		<div class="center"><a href="{{ route('messages.index') }}" class="btn azul">Ver todos</a></div>

		<ul class="collection with-header">
			<li class="collection-header"><h2 class="azul-text">Ultimos Articulos</h2></li>
			@if($posts->count() === 0)
			<li class="collection-item"><em>No hay Articulos</em></li>
			@else
			<li class="collection-item">
				<table>
					<thead>
						<tr>
							<th>Titulo</th>
							<th colspan="2"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($posts as $post)
						<tr>
							<td>{{$post->name}}</td>
							<td width="10px"><a  href="{{ route('posts.show', $post->id) }}" class="btn azul white-text ">Ver</a></td>
							<td width="10px">
								{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
									<button  class="btn rojo white-text ">Eliminar</button>
								{!! Form::close() !!}
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</li>
			@endif
		</ul>
		<div class="center"><a href="{{ route('posts.index') }}" class="btn azul">Ver todos</a></div>
	</section>

	
</main>
@endsection

@section('scripts')
	<script src="{{ asset('vendor/canvas/canvasjs.min.js') }}"></script>
	<script>
		var ctx = document.getElementById('visitorsChart');
		var myChart = new Chart(ctx, {
		    type: 'line',
		    data: {
		        labels: [@foreach($analyticsData as $data){!! json_encode($data['date']->format('d M')) !!},@endforeach]
		        ,
		        datasets: [{
		            label: 'Visitantes ultimos 30 dias',
		            data: [@foreach($analyticsData as $data){!! json_encode($data['visitors']) !!} ,@endforeach],
		            backgroundColor: [
		                'rgba(147, 186, 31, 0.4)'
		            ],
		            borderColor: [
		                'rgba(147, 186, 31, 1)'
		            ],
		            borderWidth: 2
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero: true
		                }
		            }]
		        }
		    }

		});

	</script>
@endsection
