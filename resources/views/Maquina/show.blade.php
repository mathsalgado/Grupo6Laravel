@extends('master')
@section('titulo','Maquina')
@section('corpo')
	<div class="container">
		<h3>Maquina</h3>
		<div class="row">
			<div class="col-sm-6">
				<dl>
					<dt>Tipo</dt>
					<dd>{{$maquinas->nome}}</dd>
					<dt>Produto</dt>
					<dd>{{$maquinas->endereco}}</dd>
				</dl>
				<form action="/maquinas/{{$maquinas->id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
					@csrf
					@method('DELETE')
					<input type="submit" value="Excluir" class="btn btn-primary btn-sm">
					<a href="/maquinas" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection
