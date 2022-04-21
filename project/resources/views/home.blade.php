@extends('layouts.app')

@section('content')

@include('sidebar.home')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">
            <h1 id="JornadaTitulo" class="bluenefro"><i class="bi bi-house-door-fill"></i> Inicio</h1>
            <br>
                <div class="card">

                    <div class="card-body">
                        
                        <div class= "row">
                            <div class= "col text-center align-bottom">
                                <a href="{{ url('/beneficiario') }}" class="btn btn-outline-secondary"><i class="bi bi-people-fill"></i> Beneficiarios</a>
                            </div>
                        </div>
                        <br>
                        
                        <div class= "row">
                            <div class= "col text-center align-bottom">
                                @can('admin', App\Models\User::class)
                                <a href="{{ url('/register') }}" class="btn btn-outline-secondary"><i class="bi bi-person-plus-fill"></i> Gestión Usuarios</a>
                                @endcan
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

    <div class="row justify-content-center">
        <div class="col text-center">
            <img src="/img/mutate.png" class="" width="400" alt="..." style="opacity:0.5;">
        </div>
    </div>
    
</div>
@endsection
