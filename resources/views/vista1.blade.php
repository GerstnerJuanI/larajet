@extends('layouts.vistapadre')

@section('contenidoPrincipal')
<h1>Contenido de la vista 1</h1>

<div class="card" style="width: 18rem;">
    <img src="{{asset('images/favicon.ico')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">$nombre</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
@endsection