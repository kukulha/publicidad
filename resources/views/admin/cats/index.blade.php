@extends('layouts.admin')

@section('title', 'Directorio/Categorias')

@section('content')
<main class="admin container">
	<section cat="section">
		<h3 class="azul-text bold ">Categorías</h3>
		<a href="{{ route('cats.create') }}" class="btn azul white-text"><i class="fas fa-plus-square right"></i>Crear</a>
		<table cat="striped">
			<thead>
				<tr>
					<th>Etapa</th>
					<th>URL</th>
					<th colspan="2">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cats as $cat)
					<tr>
						<td>{{ $cat->name }}</td>
						<td>{{ $cat->slug }}</td>
						<td width="10px"><a href="{{ route('cats.edit', $cat->id) }}" class="btn azul white-text">Editar</a></td>
						<td width="10px">
							{{ Form::open(['route' => ['cats.destroy', $cat->id], 'method' => 'DELETE']) }}
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