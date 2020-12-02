@extends('master')
@section('titulo','Editar Maquina')
@section('corpo')
	<div class="container">
		<h3>Nova Maquina</h3>
		<div class="row">
			<div class="col-sm-6">
				<form action="/maquinas/{{$maquinas->id}}" method="post">
					@csrf  <!-- token de segurança -->
					@method('PUT') <!-- para acionar a função update do controller -->
					<div class="form-group">
						<label for="tipo">Tipo</label>
						<input type="text" name="tipo" id="tipo" class="form-control" value="{{empty(old('tipo')) ? $maquinas->nome : old('tipo')}}"/>
						@if($errors->has('tipo'))
						<p class="text-danger">{{$errors->first('tipo')}}</p>
						@endif
					</div>
					<div>
						<label for="produto">Produto</label>
						<input type="text" name="produto" id="produto" class="form-control" value="{{empty(old('produto')) ? $maquinas->endereco : old('produto')}}"/>
						@if($errors->has('produto'))
						<p class="text-danger">{{$errors->first('produto')}}</p>
						@endif
					</div>
		    		<input type="submit" value="Alterar" class="btn btn-primary btn-sm"/>
		    		<a href="/maquinas" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection
