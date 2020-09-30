@extends('layouts.app')

@guest
@section('content')
<meta http-equiv="refresh" content="0; url={{ route('login') }}">
@endsection

@else

@section('content')
<center><h3>Departamentos: <a href="departaments/create"><button class="btn-agregar"><span class="icon-user-plus"> Agregar </span></button></a> <a href="{{ url('/') }}"><button class="btn-volver"><span class="icon-arrow-left"></span>Volver</button></a></h3></center>
<center><table class="table" style="width: 80%">
  <thead style="background-color: #9AC3DF">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Estatus</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
  	@foreach ($depas as $depa)
		<tr>
			
				<th scope="row">{{$depa->id}}</th>
				<td>{{$depa->name}}</td>
        <td>{{$depa->status}}</td>
				<td><a href="departaments/{{$depa->id}}/edit"><button class="btn-modificar"><span class="icon-pencil2"></span>Modificar</button></a></td>
			
		</tr>
	@endforeach
  </tbody>
</table>
{{$depas->render()}}</center>
@endsection
@endguest