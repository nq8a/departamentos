@extends('layouts.app')

@guest
@section('content')
<meta http-equiv="refresh" content="0; url={{ route('login') }}">
@endsection

@else

@section('content')
<center><h3>Usuarios: <a href="users/create"><button class="btn-agregar"><span class="icon-user-plus"> Agregar </span></button></a> <a href="{{ url('/') }}"><button class="btn-volver"><span class="icon-arrow-left"></span>Volver</button></a></h3></center>
<center><table class="table" style="width: 80%">
  <thead style="background-color: #9AC3DF">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">1° Nombre</th>
      <th scope="col">2° Nombre</th>
      <th scope="col">1° Apellido</th>
      <th scope="col">2° Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">Estatus</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
  	@foreach ($users as $user)
		<tr>
			
				<th scope="row">{{$user->id}}</th>
				<td>{{$user->name1}}</td>
				<td>{{$user->name2}}</td>
				<td>{{$user->lastname1}}</td>
				<td>{{$user->lastname2}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->name}}</td>
				<td><a href="users/{{$user->id}}/edit"><button class="btn-modificar"><span class="icon-pencil2"></span>Modificar</button></a></td>
			
		</tr>
	@endforeach
  </tbody>
</table>
{{$users->render()}}</center>
@endsection
@endguest