<h1> Listado De Computadoras</h1>
<table>
	<tr>
		
		<td>marca</td>
		<td>modelo</td>


	
	</tr>
        
	<tr>
	<tr>

     	 <td>{{$computadoras->marca}}</td> 
		 <td>{{$computadoras->modelo}}</td>
		
	</tr>
	</tr>
</table>


<form method="POST" action="{{route('computadoras.destroy',$computadoras->id)}}">
{{csrf_field()}} 
<input name="_method" type="hidden" value="delete">

<button>Eliminar</button>
</form>


<a href="{{route('computadoras.edit', $computadoras)}}">Editar</a>

