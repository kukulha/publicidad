@extends('layouts.admin')

@section('title' , 'Servicios/Etapas')

@section('content')
<main class="admin container">
	<section class="section">
		<h3 class="azul-text bold">Etapas</h3>
		<a href="{{ route('stages.create') }}" class="btn azul white-text"><i class="fas fa-plus-square right"></i>Crear</a>
		<table class="striped">
			<thead>
				<tr>
					<th>Etapa</th>
					<th>URL</th>
					<th colspan="2">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($stages as $stage)
					<tr>
						<td>{{ $stage->name }}</td>
						<td>{{ $stage->slug }}</td>
						<td width="10px"><a href="{{ route('stages.edit', $stage->id) }}" class="btn azul white-text">Editar</a></td>
						<td width="10px">
							{{ Form::open(['route' => ['stages.destroy', $stage->id], 'method' => 'DELETE']) }}
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