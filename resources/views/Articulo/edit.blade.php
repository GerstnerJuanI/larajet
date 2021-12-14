@extends('adminlte::page')

@section('title', 'Articulos|Editar')

@section('content_header')
    <h1>EDITAR REGISTROS</h1>
@stop

@section('content')
<form class="form-floating" action="/articulos/{{$articulo->id}}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-floating mb-3">
        <input  id="codigo" name="codigo" type="text" class="form-control" placeholder="000" value="{{$articulo->codigo}}" >
        <label for="">Codigo</label>
    </div>
    <div class="form-floating mb-3">
        <input  id="descripcion" name="descripcion" type="text" class="form-control" placeholder="escriba aqui" value="{{$articulo->descripcion}}" >
        <label for="">Descripcion</label>
    </div>
    <div class="form-floating mb-3">
        <input  id="cantidad" name="cantidad" type="number" class="form-control" placeholder="0" value="{{$articulo->cantidad}}" >
        <label for="">Cantidad</label>
    </div>
    <div class="form-floating mb-3">
        <input  id="precio" name="precio" type="number" step="any" class="form-control" placeholder="0.00" value="{{$articulo->precio}}" >
        <label for="">Precio</label>
    </div>
    <a href="/articulos"  class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop