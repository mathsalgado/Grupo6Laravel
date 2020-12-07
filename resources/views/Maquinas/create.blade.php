@extends('master')
@section('titulo','Criar Maquina')
@section('corpo')
	<div class="container">
		<h3>Nova Maquina</h3>
		<div class="row">
			<div class="col-sm-6">
				<form action="/Maquina" method="post">
					@csrf  <!-- token de segurança -->
					<div class="form-group">
						<label for="nome">Tipo</label>
						<input type="text" name="tipo" id="tipo" class="form-control" value="{{old('tipo')}}"/>
						@if($errors->has('tipo'))
						<p class="text-danger">{{$errors->first('tipo')}}</p>
						@endif
					</div>
					<div>
						<label for="produto">Produto</label>
						<input type="text" name="produto" id="produto" class="form-control" value="{{old('produto')}}"/>
						@if($errors->has('produto'))
						<p class="text-danger">{{$errors->first('produto')}}</p>
						@endif
					</div>
		    		<input type="submit" value="Criar" class="btn btn-primary btn-sm"/>
		    		<a href="/Maquina" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection
