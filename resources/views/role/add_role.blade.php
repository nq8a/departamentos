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

  <form method="POST" action="{{url('/roles')}}">
        @csrf
<center><div class="row">
  <div class="col-12">
      <div class="form-group row">
      <label for="" class="col-4 col-form-label">* Usuario </label>
      <select name="user" id="user">
        <option value="">Seleccione</option>
        @foreach($users as $user)
          <option value="{{$user->id}}">{{$user->name1}} {{$user->lastname1}}</option>
        @endforeach
      </select>
      </div>
      <div class="form-group row">
      <label for="" class="col-4 col-form-label">* Departamento </label>
      <select name="depa" id="depa">
        <option value="">Seleccione</option>
        @foreach($departaments as $depa)
          <option value="{{$depa->id}}">{{$depa->name}}</option>
        @endforeach
      </select>
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