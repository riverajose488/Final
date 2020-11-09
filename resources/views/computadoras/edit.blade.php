<form method="POST" action="{{route('computadoras.update',$computadoras->id)}}">
{{csrf_field()}} 
<input name="_method" type="hidden" value="patch">

<label for="marca">marca </label>
<input type="text" name="marca" value="{{$computadoras->marca}}" >   

<label for="modelo">modelo</label>
<input type="text" name="modelo" value="{{$computadoras->modelo}}" >   

<button >Guardar</button>
</form>