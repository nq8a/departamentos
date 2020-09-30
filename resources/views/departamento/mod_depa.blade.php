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
        Modificar la información del Departamento
    </div>
    </div>
  </h3>

  <form form method="POST" action="{{url('/departaments/'.$depas['id'])}}">
    <input type="hidden" name="_method" value="PUT">
        @csrf
<center><div class="row">
  <div class="col-12">
      <div class="form-group row">
      <label for="" class="col-4 col-form-label">* Nombre: </label>
      <input type="text" placeholder="1° Nombre" id="name" name="name" class="form-control col-6" value="{{$depas['name']}}" required>
      </div>
      <div class="form-group row">
      <label for="" class="col-4 col-form-label">* Estatus: </label>
        <select name="status" id="status" required>
        @if($depas['status']=="Activo")
        <option value="1" selected>Activo</option>
        <option value="2">Inactivo</option>
        <option value="3">Bloqueado</option>
        @endif
        @if($depas['status']=="Inactivo")
        <option value="1">Activo</option>
        <option value="2" selected>Inactivo</option>
        <option value="3">Bloqueado</option>
        @endif
        @if($depas['status']=="Bloqueado")
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
        <center><a href="{{url('/departaments')}}"><button class="btn-volver"><span class="icon-arrow-left"></span>Volver</button></a></center>
</section>
@endsection
@endguest