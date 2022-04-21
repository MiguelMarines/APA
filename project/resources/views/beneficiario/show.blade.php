@extends('layouts.app')

@section('content')

@include('sidebar.beneficiario')

<div class="container">

    @if (Session::has('eliminado'))
        <div class="alert alert-success" role="alert"> {{Session::get('eliminado')}} </div>      
    @endif

    @if (Session::has('nuevo'))
        <div class="alert alert-success" role="alert"> {{Session::get('nuevo')}} </div>       
    @endif

    @if (Session::has('editado'))
        <div class="alert alert-success" role="alert"> {{Session::get('editado')}} </div>    
    
    @endif

    @csrf
    {{ method_field('PATCH') }}
    @include('beneficiario.card',['modo'=>'Detalle de'])

    @include('nefropediatria.card',['id'=>$id])

</div>

@endsection