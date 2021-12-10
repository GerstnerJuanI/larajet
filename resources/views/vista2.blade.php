@extends('layouts.vistapadre')

@section('contenidoPrincipal')
<h1>Contenido de la vista 2</h1>
<h2> @if (count($users)===1)
    <span class="badge bg-primary"> Hay un solo elemento</span>
@elseif(count($users)> 1)
    <span class="badge bg-success">Hay muchos elementos</span>
@else
    <span class="badge bg-danger">No hay elementos</span>
    @endif
</h2>
<div class="row row-cols-1 row-cols-md-2 g-4">

    @foreach($users as $user)
        <div class="col">
            <div class="card text-white  border-info bg-dark mb-3" style="max-width: 18rem;">
                <img src="{{ asset('images/favicon.ico') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $user }}</h5>
                    <p class="card-text">
                        <ul>
                            @for($i = 0; $i < 10; $i++)
                                <li>el valor de i es: {{ $i+1 }} </li>
                            @endfor
                        </ul>

                    </p>
                    <a href="#" class="btn btn-success">Go somewhere</a>
                </div>
            </div>
        </div>
    @endforeach

</div>
@endsection