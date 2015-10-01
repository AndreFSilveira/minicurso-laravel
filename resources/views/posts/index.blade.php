@extends('main')

@section('content')
	<h1>Posts</h1>
	<hr>
	
	@if(session()->has('success'))
		<div class="alert alert-success">
			{{ session()->get('success') }}
		</div>
	@endif

	<a href="/posts/create" class="btn btn-default pull-right">+ Novo Post</a>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>Titulo</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach($posts as $post)
				<tr>
					<td>{{$post->id}}</td>
					<td>{{$post->title}}</td>
					<td>
						<a href="/posts/edit/{{ $post->id }}" class="btn btn-primary">Editar</a>
						<a href="/posts/destroy/{{ $post->id }}" class="btn btn-danger">Deletar</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $posts->render() !!}
@endsection