@extends('layouts.admin')

@section('title' , 'Articulos')

@section('content')
<main class="admin container">
	<section class="section">
		<h3 class="azul-text bold">Articulos</h3>
		<a href="{{ route('posts.create') }}" class="btn azul white-text"><i class="fas fa-plus-square right"></i>Crear</a>
		<table class="striped">
			<thead>
				<tr>
					<th>Imagen</th>
					<th>Titulo</th>
					<th>URL</th>
					<th colspan="2">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($posts as $post)
					<tr>
						@if($post->file)
							<td width="150px"><img src="{{ Storage::url($post->file) }}" width="120px" alt=""></td>
						@endif
						<td>{{ $post->name }}</td>
						<td>{{ $post->slug }}</td>
						<td width="10px"><a href="{{ route('posts.edit', $post->id) }}" class="btn azul white-text">Editar</a></td>
						<td width="10px">
							{{ Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) }}
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