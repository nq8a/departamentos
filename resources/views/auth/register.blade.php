@extends('layouts.app')

@section('content')

<form action="url('/users')" method="POST">
    @csrf
<table>
    <tr>
        <td colspan="2">Registro de usuario</td>
    </tr>
    <tr>
        <td><label>*Primer Nombre:</label></td>
        <td><input type="text" name="name1" id="name1" placeholder="1° nombre..." required></td>
    </tr>
    <tr>
        <td><label>Segundo Nombre</label></td>
        <td><input type="text" name="name2" id="name2" placeholder="2° Nombre..."></td>
    </tr>
    <tr>
        <td><label>* Primer Apellido</label></td>
        <td><input type="text" name="lastname1" id="lastname1" required></td>
    </tr>
    <tr>
        <td><label>Segundo Apellido</label></td>
        <td><input type="text" name="lastname2" id="lastname2"></td>
    </tr>
    <tr>
        <td><label>* Correo</label></td>
        <td><input type="email" name="email" id="email" required></td>
    </tr>
    <tr>
        <td><label>Roles</label></td>
        <td><select>
            <option value="">Seleccione</option>
            <option value="1">Administrador</option>
            <option value="2">Tecnico</option>
        </select></td>
    </tr>
    <tr>
        <td>* Password</td>
        <td><input type="Password" name="pass" id="pass" required></td>
    </tr>
        <tr>
        <td>* Confirmar Password</td>
        <td><input type="Password" name="repass" id="repass" required></td>
    </tr>
</table>
</form>

@endsection