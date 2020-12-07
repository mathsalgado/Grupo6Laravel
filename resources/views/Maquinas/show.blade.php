@extends('master')
@section('titulo','Maquina')
@section('corpo')
	<div class="container">
		<h3>Maquina</h3>
		<div class="row">
			<div class="col-sm-6">
				<dl>
                    <?php
                    $id = $maquinas->id ?? 1;
                    $tipo = $maquinas->tipo ?? 'teste';
                    $produto = $maquinas->produto ?? 'teste';
                   ?>
					<dt>Tipo</dt>
					<dd>{{$tipo}}</dd>
					<dt>Produto</dt>
					<dd>{{$produto}}</dd>
				</dl>
				<form action="/Maquina/{{$id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
					@csrf
					@method('DELETE')
					<input type="submit" value="Excluir" class="btn btn-primary btn-sm">
					<a href="/Maquina" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection
