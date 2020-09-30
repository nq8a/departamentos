@extends('layouts.app')

@guest
@section('content')
<meta http-equiv="refresh" content="0; url={{ route('login') }}">
@endsection

@else

@section('content')

<section class="container">
  <h3 class="text-uppercase text-center">
    <div class="row">
      <div class="col-12">
      <span class="icon-pencil2"></span>  Modificar la información del usuario
    </div>
    </div>
  </h3>

  <form form method="POST" action="{{url('/users/'.$users['id'])}}" onsubmit="return validar_user();">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="id_user" id="id_user" value="{{Auth::user()->id}}">
        @csrf
<center><div class="row">
  <div class="col-12">
      <div class="form-group row">
      <label for="" class="col-4 col-form-label">1° Nombre: </label>
      <input type="text" placeholder="1° Nombre" id="name1" name="name1" class="form-control col-6" value="{{$users['name1']}}">
      </div>
      <div class="form-group row">
      <label for="" class="col-4 col-form-label">2° Nombre: </label>
      <input type="text" placeholder="2° Nombre" id="name2" name="name2" class="form-control col-6" value="{{$users['name2']}}">
      </div>
      <div class="form-group row">
      <label for="" class="col-4 col-form-label">1° Apellido: </label>
      <input type="text" placeholder="1° Apellido" id="lastname1" name="lastname1" class="form-control col-6" value="{{$users['lastname1']}}">
      </div>
      <div class="form-group row">
      <label for="" class="col-4 col-form-label">2° Apellido: </label>
      <input type="text" placeholder="2° Apellido" id="lastname2" name="lastname2" class="form-control col-6" value="{{$users['lastname2']}}">
      </div>
      <div class="form-group row">
      <label for="" class="col-4 col-form-label">Correo: </label>
      <input type="email" placeholder="email..." id="email" name="email" class="form-control col-6" value="{{$users['email']}}">
      </div>
      <div class="form-group row">
      <label for="" class="col-4 col-form-label">Departamento:  </label>
      <select name="depa" id="depa" class="form-control col-6">
        @if($users['depa']=="Administrativo")
        <option value="1" selected>Administrativo</option>
        <option value="2">Operativo</option>
        <option value="3">Mantenimiento</option>
        @endif
        @if($users['depa']=="Operativo")
        <option value="1">Administrativo</option>
        <option value="2" selected>Operativo</option>
        <option value="3">Mantenimiento</option>
        @endif
        @if($users['depa']=="Mantenimiento")
        <option value="1">Administrativo</option>
        <option value="2">Operativo</option>
        <option value="3" selected>Mantenimiento</option>
        @endif
      </select>
      </div>
      <div class="form-group row">
      <label for="" class="col-4 col-form-label">Estatus: </label>
      <select name="status" id="status" class="form-control col-6">

        @if($users['name']=="Activo")
        <option value="1" selected>Activo</option>
        <option value="2">Inactivo</option>
        <option value="3">Bloqueado</option>
        @endif
        @if($users['name']=="Inactivo")
        <option value="1">Activo</option>
        <option value="2" selected>Inactivo</option>
        <option value="3">Bloqueado</option>
        @endif
        @if($users['name']=="Bloqueado")
        <option value="1">Activo</option>
        <option value="2">Inactivo</option>
        <option value="3" selected>Bloqueado</option>
        @endif
      </select>
      </div>
      <div class="form-group">
      <center><button type="submit" class="btn btn-success">
        Modificar
      </button></h3></center>
      </div>
  </div>
</div></center>
        </form>
        <center><a href="{{url('/users')}}"><button class="btn-volver"><span class="icon-arrow-left"></span>Volver</button></a></center>
</section>
@endsection
@endguest