@extends('layouts.app')

@section('content')

@include('sidebar.usuarios')
  
<div class="container">
    <form method="post" action="/registrarUsuario">

        @csrf
  
        @include('usuarios.form',['modo'=>'Crear'])

    </form>
</div>

@endsection