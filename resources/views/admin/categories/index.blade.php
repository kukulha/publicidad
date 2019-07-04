@extends('layouts.admin')

@section('title', 'Articulos/Categorias')

@section('content')
<main class="admin container">
	<section category="section">
		<h3 class="azul-text bold ">Categorías</h3>
		<a href="{{ route('categories.create') }}" class="btn azul white-text"><i class="fas fa-plus-square right"></i>Crear</a>
		<table category="striped">
			<thead>
				<tr>
					<th>Categoría</th>
					<th>URL</th>
					<th colspan="2">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categories as $category)
					<tr>
						<td>{{ $category->name }}</td>
						<td>{{ $category->slug }}</td>
						<td width="10px"><a href="{{ route('categories.edit', $category->id) }}" class="btn azul white-text">Editar</a></td>
						<td width="10px">
							{{ Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) }}
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