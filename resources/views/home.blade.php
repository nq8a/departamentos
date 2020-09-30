@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido {{ Auth::user()->name1 }} {{Auth::user()->lastname1}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div><a href="{{url('users')}}">Usuarios</a></div>
                        <div><a href="{{url('departaments')}}">Departamentos</a></div>
                        <div><a href="{{url('roles')}}">Roles</a></div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
