@extends('layouts.app')

@guest
@section('content')
<meta http-equiv="refresh" content="0; url={{ route('login') }}">
@endsection

@else

@section('content')

<section class="container">
          <center><h1>Registro Exitoso!!</h1></center>
        <center><a href="{{url('/roles')}}"><button class="btn-volver"><span class="icon-arrow-left"></span>Volver</button></a></center>
</section>
@endsection
@endguest