@extends('layouts.admin')

@section('title' , 'Servicios')

@section('content')
<main class="admin container">
	<section class="section">
		<h3 class="azul-text bold">Empresas</h3>
		<a href="{{ route('directories.create') }}" class="btn azul white-text"><i class="fas fa-plus-square right"></i>Crear</a>
		<table class="striped">
			<thead>
				<tr>
					<th>Imagen</th>
					<th>Empresa</th>
					<th colspan="2">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($directories as $directory)
					<tr>
						@if($directory->file)
							<td width="150px"><img src="{{ Storage::url($directory->file) }}" width="120px" alt=""></td>
						@endif
						<td>{{ $directory->name }}</td>
						<td width="10px"><a href="{{ route('directories.edit', $directory->id) }}" class="btn azul white-text">Editar</a></td>
						<td width="10px">
							{{ Form::open(['route' => ['directories.destroy', $directory->id], 'method' => 'DELETE']) }}
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