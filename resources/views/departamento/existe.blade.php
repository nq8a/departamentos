@extends('layouts.app')

@guest
@section('content')
<meta http-equiv="refresh" content="0; url={{ route('login') }}">
@endsection

@else

@section('content')

<section class="container">
          <center><h1>Departamento Ya Registrado!!</h1></center>
        <center><a href="{{url('/departaments')}}"><button class="btn-volver"><span class="icon-arrow-left"></span>Volver</button></a></center>
</section>
@endsection
@endguest