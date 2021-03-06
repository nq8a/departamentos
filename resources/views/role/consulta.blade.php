@extends('layouts.app')

@guest
@section('content')
<meta http-equiv="refresh" content="0; url={{ route('login') }}">
@endsection

@else

@section('content')
<center><h3>Departamentos:  <a href="{{ url('/') }}"><button class="btn-volver"><span class="icon-arrow-left"></span>Volver</button></a></h3></center>
<center><table class="table" style="width: 80%">
  <thead style="background-color: #9AC3DF">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre Usuario</th>
      <th scope="col">Departamento</th>
    </tr>
  </thead>
  <tbody>
  	@foreach ($roles as $role)
		<tr>
			
				<th scope="row">{{$role->id}}</th>
				<td>{{$role->name1}} {{$role->lastname1}}</td>
        <td>{{$role->depa}}</td>
			
		</tr>
	@endforeach
  </tbody>
</table>
{{$roles->render()}}</center>
@endsection
@endguest