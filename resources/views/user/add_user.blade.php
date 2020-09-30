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
      <span class="icon-user-plus"></span>  Agregar la información del usuario
    </div>
    </div>
  </h3>

  <form method="POST" action="{{url('/users')}}">
        @csrf
<center><div class="row">
  <div class="col-12">
      <div class="form-group row">
      <label for="" class="col-4 col-form-label">* 1° Nombre: </label>
      <input type="text" placeholder="1° Nombre" id="name1" name="name1" class="form-control col-6" required>
      </div>
      <div class="form-group row">
      <label for="" class="col-4 col-form-label">2° Nombre: </label>
      <input type="text" placeholder="2° Nombre" id="name2" name="name2" class="form-control col-6">
      </div>
      <div class="form-group row">
      <label for="" class="col-4 col-form-label">* 1° Apellido: </label>
      <input type="text" placeholder="1° Apellido" id="lastname1" name="lastname1" class="form-control col-6" required>
      </div>
      <div class="form-group row">
      <label for="" class="col-4 col-form-label">2° Apellido: </label>
      <input type="text" placeholder="2° Apellido" id="lastname2" name="lastname2" class="form-control col-6">
      </div>
      <div class="form-group row">
      <label for="" class="col-4 col-form-label">* Correo: </label>
      <input type="email" placeholder="email..." id="email" name="email" class="form-control col-6" required>
      </div>
      <div class="form-group row">
      <label for="" class="col-4 col-form-label">* Departamento: </label>
      <select name="depa" id="depa" class="form-control col-6" required>
        <option value="">[Seleccione]</option>
        <option value="1">Administrativo</option>
        <option value="2">Operativo</option>
        <option value="3">Mantenimiento</option>
      </select>
      </div>
      <div class="form-group row">
      <label for="" class="col-4 col-form-label">* Contraseña: </label>
      <input type="password" placeholder="Contraseña..." id="pass" name="pass" class="form-control col-6" required>
      </div>
      <div class="form-group row">
      <label for="" class="col-4 col-form-label">* Confirmar contraseña: </label>
      <input type="password" placeholder="Confirmar..." id="c_pass" name="c_pass" class="form-control col-6" required>
      </div>
      <div class="form-group">
      <center><button type="submit" class="btn btn-success">
        Agregar
      </button></h3></center>
      </div>
  </div>
</div></center>
        </form>

        <center><a href="{{url('/users')}}"><button class="btn-volver"><span class="icon-arrow-left"></span>Volver</button></a></center>
</section>
@endsection
@endguest