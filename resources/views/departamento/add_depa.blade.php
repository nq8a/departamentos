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
      <span class="icon-user-plus"></span>  Agregue el Nombre del Departamento
    </div>
    </div>
  </h3>

  <form method="POST" action="{{url('/departaments')}}">
        @csrf
<center><div class="row">
  <div class="col-12">
      <div class="form-group row">
      <label for="" class="col-4 col-form-label">* Nombre: </label>
      <input type="text" placeholder="Nombre del departamento..." id="depa" name="depa" class="form-control col-6" required>
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