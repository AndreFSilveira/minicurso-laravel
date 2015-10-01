@extends('main')

@section('content')
	<form action="/posts" class="form" method="POST">
		{{ csrf_field() }}
		<div class="form-group">
			<label>Titulo</label>
			<input type="text" name="title">
			<br>
		</div>
		<div class="form-group">
			<label>Conteudo</label>
			<textarea name="content" id="" cols="30" rows="10"></textarea>
			<br>
		</div>
		<button type="submit" class="btn btn-success">Enviar</button>
	</form>
@endsection