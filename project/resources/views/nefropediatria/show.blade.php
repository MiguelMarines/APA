@extends('layouts.app')

@section('content')

@include('sidebar.beneficiario')

<div class="container">
  @csrf
  
  {{-- @include('notas.form',['modo'=>'Crear'],['id'=>'2']) --}}

  @if (count($errors)>0)
      
      <div class="alert alert-danger" role="alert">
          <ul>
          @foreach($errors->all() as $error)
             <li> {{$error}} </li>
          @endforeach 
          </ul>
      </div>
      
  @endif
  @if (Session::has('eliminado'))
    <div class="alert alert-success" role="alert"> {{Session::get('eliminado')}} </div>      
  @endif

  @if (Session::has('nuevo'))
    <div class="alert alert-success" role="alert"> {{Session::get('nuevo')}} </div>       
  @endif

  @if (Session::has('editado'))
    <div class="alert alert-success" role="alert"> {{Session::get('editado')}} </div>    
  
  @endif
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  
  <h1 id="consultaTitulo" class="text-center bluenefro"><i class="bi bi-person-lines-fill"></i> Consulta de {{$nefropediatria->beneficiario->nombreBeneficiario}}</h1>
  <div class="row">
    <div class="col">
      <a href="{{ url('/beneficiario/'.$nefropediatria->beneficiario->id) }}" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Regresar </a>
    </div>
    <div class="col">
    </div>
  </div>
  <br><br>
  <div class="card">
    <div class="card-body">
      <div class= "row">
          <div class="col"></div>
          <div class= "col text-center align-bottom">
                <h2 class="card-title ">Consulta Nefropediatría</h2>
          </div>
          <div class="col text-right">
          @can('nefro', App\Models\User::class)
                <a href="{{url('/nefropediatria/'.$nefropediatria->id.'/edit')}}" class="btn btn-outline-secondary"><i class="bi bi-pencil-fill"></i> Editar </a>
                <form action="{{url('/nefropediatria/'.$nefropediatria->id)}}" class="d-inline" method="post">
                    @csrf
                    {{ @method_field('DELETE') }}
                    <input type="hidden" id="id_beneficiario" name="id_beneficiario" value="{{ $nefropediatria->beneficiario->id }}">
                    <button type="submit" onclick="return confirm('¿Quiere Borrar la Consulta de Nefropediatría?')"  class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i> Borrar</button>
                </form>
          @endcan

          @can('admin', App\Models\User::class)
                <a href="{{url('/nefropediatria/'.$nefropediatria->id.'/edit')}}" class="btn btn-outline-secondary"><i class="bi bi-pencil-fill"></i> Editar </a>
                <form action="{{url('/nefropediatria/'.$nefropediatria->id)}}" class="d-inline" method="post">
                    @csrf
                    {{ @method_field('DELETE') }}
                    <input type="hidden" id="id_beneficiario" name="id_beneficiario" value="{{ $nefropediatria->beneficiario->id }}">
                    <button type="submit" onclick="return confirm('¿Quiere Borrar la Consulta de Nefropediatría?')"  class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i> Borrar</button>
                </form>
          @endcan

          @can('procuracion', App\Models\User::class)
                <a href="{{url('/nefropediatria/'.$nefropediatria->id.'/edit')}}" class="btn btn-outline-secondary"><i class="bi bi-pencil-fill"></i> Editar </a>
                <form action="{{url('/nefropediatria/'.$nefropediatria->id)}}" class="d-inline" method="post">
                    @csrf
                    {{ @method_field('DELETE') }}
                    <input type="hidden" id="id_beneficiario" name="id_beneficiario" value="{{ $nefropediatria->beneficiario->id }}">
                    <button type="submit" onclick="return confirm('¿Quiere Borrar la Consulta de Nefropediatría?')"  class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i> Borrar</button>
                </form>
          @endcan

          
          </div>
        </div>
        <div class="container">
            <table class="table table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col"><i class="bi bi-clipboard"></i>  Fecha Consulta</th>
                        <th scope="col"></th>
                      </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Fecha</th>
                    <td>{{ $nefropediatria->fecha }}</td>
                  </tr>                
                </tbody>
              </table>
        </div>
       <br>
        <div class="container">
            <table class="table table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col"><i class="bi bi-clipboard"></i>  Padecimiento</th>
                        <th scope="col"></th>
                      </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Padecimiento</th>
                    <td>{{ $nefropediatria->padecimiento }}</td>
                  </tr>                
                </tbody>
              </table>
        </div>
       <br>
        <div class="container">
            <table class="table table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col"><i class="bi bi-clipboard"></i>  Exploración Física</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Peso (Kg)</th>
                    <td>{{ $nefropediatria->peso }}</td>
                    <th>Talla (cm)</th>
                    <td>{{ $nefropediatria->talla }}</td>
                  </tr>
                  <tr>
                    <th>Tensión Arterial (mmHg)</th>
                    <td>{{ $nefropediatria->tension }}</td>
                    <th>Temperatura (ºC)</th>
                    <td>{{ $nefropediatria->temperatura }}</td>
                  </tr>
                  <tr>
                    <th>Frecuencia Cardíaca (lat/min)</th>
                    <td>{{ $nefropediatria->fCardiaca }}</td>
                    <th>Frecuencia Respiratoria (res/min)</th>
                    <td>{{ $nefropediatria->fRespiratoria }}</td>
                  </tr>
                </tbody>
              </table>
        </div>
        <br>
        <br>
        <div class="container">
            <table class="table table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col"><i class="bi bi-clipboard"></i> Análisis</th>
                        <th scope="col"></th>
                      </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Análisis</th>
                    <td>{{ $nefropediatria->analisis }}</td>
                  </tr>                
                </tbody>
              </table>
        </div>
       <br>
       <br>
       <div class="container">
            <table class="table table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col"><i class="bi bi-clipboard"></i> Diagnóstico</th>
                        <th scope="col"></th>
                      </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Diagnóstico</th>
                    <td>{{ $nefropediatria->diagnostico }}</td>
                  </tr>                
                </tbody>
              </table>
        </div>
       <br>
        <div class="container">
            <table class="table table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col"><i class="bi bi-clipboard"></i>  Tratamiento</th>
                        <th scope="col"></th>
                      </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Tratamiento</th>
                    <td>{{ $nefropediatria->tratamiento }}</td>
                  </tr>
                  <tr>
                    <th>Médico</th>
                    <td>{{ $nefropediatria->medico }}</td>
                  </tr>                
                </tbody>
              </table>
        </div>
       <br>
       
</div>        
</div>
</div>
<br>

  
  <script type="text/javascript">
      $('.date').datepicker({  
         format: 'yyyy-mm-dd'
       });  
  </script>
  

</div>
@endsection