<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
<div class="d-flex" id="wrapper">
        
  <!-- Sidebar -->
  <div class="bg-light border-right" id="sidebar-wrapper">
    <div class="list-group list-group-flush">
          <a href="{{url('/home')}}" class="list-group-item list-group-item-action bg-light "><i class="bi bi-house-door-fill"></i> Inicio</a>
          <a href="{{url('/beneficiario')}}" class="list-group-item list-group-item-action bg-light"><i class="bi bi-people-fill"></i> Beneficiarios</a>
          <!-- {{-- <a href="{{url('/usuarios')}}" class="list-group-item list-group-item-action bg-success active"><i class="bi bi-person-plus-fill"></i> Registrar Usuario</a> --}} -->
          
          @can('admin', App\Models\User::class)
            <a href="{{url('/register')}}" class="list-group-item list-group-item-action bg-success active"><i class="bi bi-person-plus-fill"></i> Gestión Usuarios</a>
          @endcan
            
    </div>
  </div>