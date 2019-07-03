@extends('layouts.admin')

@section('title' , 'Servicios')

@section('content')
<main class="admin container">
	<section class="section">
		<h3 class="azul-text bold">Servicios</h3>
		<a href="{{ route('services.create') }}" class="btn azul white-text"><i class="fas fa-plus-square right"></i>Crear</a>
		<table class="striped">
			<thead>
				<tr>
					<th>Imagen</th>
					<th>Servicio</th>
					<th>Etapa</th>
					<th colspan="2">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($services as $service)
					<tr>
						@if($service->file)
							<td width="150px"><img src="{{ Storage::url($service->file) }}" width="120px" alt=""></td>
						@endif
						<td>{{ $service->name }}</td>
						<td>{{ $service->stage->name }}</td>
						<td width="10px"><a href="{{ route('services.edit', $service->id) }}" class="btn azul white-text">Editar</a></td>
						<td width="10px">
							{{ Form::open(['route' => ['services.destroy', $service->id], 'method' => 'DELETE']) }}
								{{ Form::submit('Eliminar', ['class' => 'btn rojo white-text']) }}
							{{ Form::close() }}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</section>
</main>
@endsection

@section('scripts')
	
@endsection