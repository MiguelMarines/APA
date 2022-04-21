@extends('layouts.app')

@section('content')

@include('sidebar.register')

    
<div class="container">
    <form method="post" action="/register">

        @csrf
  
        @include('registration.form',['modo'=>'Crear'])

    </form>
</div>

@endsection