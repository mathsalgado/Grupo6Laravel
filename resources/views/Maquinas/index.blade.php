@extends('master')
@section('titulo','Lista de Maquinas')
@section('corpo ')
<a href="/maquinas/create" class="btn btn-primary btn-sm"> Novo </a>
<table class="table table-striped">
<tr>
    <th>Id</th>
    <th>Tipo</th>
    <th>Produto</th>
</tr>
@foreach ($maquinas as $m)
<tr>
    <td>{{$m->id}}</td>
    <td>{{$m->tipo}}</td>
    <td>{{$m->produto}}</td>
        <a href="/maquinas/{{$m->id}}" class="btn btn-primary btn-sm">Detalhe</a>
        <a href="/maquinas/{{$m->id}}/edit" class="btn btn-primary btn-sm">Editar</a>
</tr>
@endforeach
</table>

{{$Maquinas->links()}}
@endsection
