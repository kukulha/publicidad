@extends('layouts.admin')

@section('title', 'Mensajes')

@section('content')
<main class="admin container">
	<section message="section">
		<h3 class="azul-text bold ">Mensajes</h3>
		<table message="striped">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Email</th>
					<th>Teléfono</th>
					<th>Servicio</th>
					<th colspan="1">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($messages as $message)
					<tr>
						<td>{{ $message->name }}</td>
						<td>{{ $message->email }}</td>
						<td>{{ $message->phone }}</td>
						<td>{{ $message->service }}</td>
						<td width="10px">
							{{ Form::open(['route' => ['messages.destroy', $message->id], 'method' => 'DELETE']) }}
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