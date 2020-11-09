<h1>Ingrese su Computadora</h1>

<form method="POST" action="{{route('computadoras.store')}}">
{{csrf_field()}}

<label for="marca">marca </label>
<input type="text" name="marca" >   

<label for="modelo">modelo</label>
<input type="text" name="modelo" >   


<button >Guardar</button>
</form>
