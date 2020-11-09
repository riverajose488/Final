<h1>Registros</h1>

@forelse($computadoras as $computadora)

    <li> <a href="{{route('computadoras.show',$computadora['id'])}}">
    {{$computadora->marca}}</li>
    
    @empty<li>No hay computadoras para mostrar</li>

@endforelse    