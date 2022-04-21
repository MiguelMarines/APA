@extends('layouts.app')

@section('content')

@include('sidebar.beneficiario')

<div class="container"><form action="{{url('/beneficiario/'.$beneficiario->id.'/nefropediatria')}}" method="post">
  @csrf
  
  @if (count($errors)>0)
      
      <div class="alert alert-danger" role="alert">
          <ul>
          @foreach($errors->all() as $error)
             <li> {{$error}} </li>
          @endforeach 
          </ul>
      </div>
      
  @endif
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  
  <h1 id="AntecedentesTitulo" class="text-center bluenefro"><i class="bi bi-x-diamond"></i> Registrar Consulta Nefropediatría</h1>
  <a href="{{url('/beneficiario/'.$beneficiario->id)}}" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Regresar </a>

  
  <div class="container mt-3">
    <div id="none" class="stepwizard col" style="display:none">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p id="timeline"><i class="bi bi-clipboard"></i> Exploración Física</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p id="timeline"><i class="bi bi-clipboard"></i>Análisis</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p id="timeline"><i class="bi bi-clipboard"></i> Diagnóstico </p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                <p id="timeline"><i class="bi bi-clipboard"></i> Tratamiento</p>
            </div>
        </div>
    </div>
    <br>
    <form role="form" action="" method="post">
        <div class="row setup-content" id="step-1">
            <div class="col-1">
            </div>
            <h3 class="text-center"><i class="bi bi-clipboard"></i> Exploración Física</h3>
            
            <div class="container">
            <br>


            <div class="row">
                <div class="col-1">
                </div>
                <div class="col-10">
                    <div class="form-group">
                        <label for="fecha">Fecha Consulta</label>
                        <input class="date form-control" type="date" name="fecha" value="{{ isset($nefropediatria->fecha)?$nefropediatria->fecha:old('fecha') }}" id="fecha">    
                    </div>
                </div>
                <div class="col-1">
                </div>
            </div>


            <div class="row">
                <div class="col-1">
                </div>
                <div class="col">

                    <div class="form-group">
                        <label for="peso">Peso (Kg)</label>
                        <input type="hidden" id="beneficiario_id" name="beneficiario_id" value="{{ $beneficiario->id }}">
                        <input class="form-control" name="peso" value="{{ isset($nefropediatria->peso)?$nefropediatria->peso:old('peso') }}" id="peso" rows="6">
                    </div>

                    <div class="form-group">
                        <label for="tension">Tensión Arterial (mmHg)</label>
                        <input class="form-control" name="tension" value="{{ isset($nefropediatria->tension)?$nefropediatria->tension:old('tension') }}" id="tension" rows="6">
                    </div>

                    <div class="form-group">
                        <label for="fCardiaca">Frecuencia Cardíaca (lat/min)</label>
                        <input class="form-control" name="fCardiaca" value="{{ isset($nefropediatria->fCardiaca)?$nefropediatria->fCardiaca:old('fCardiaca') }}" id="fCardiaca" rows="6">
                    </div>

                </div>

                <div class="col">

                    <div class="form-group">
                        <label for="talla">Talla (cm)</label>
                        <input class="form-control" name="talla" value="{{ isset($nefropediatria->talla)?$nefropediatria->talla:old('talla') }}" id="talla" rows="6">
                    </div>

                    <div class="form-group">
                        <label for="temperatura">Temperatura (ºC)</label>
                        <input class="form-control" name="temperatura" value="{{ isset($nefropediatria->temperatura)?$nefropediatria->temperatura:old('temperatura') }}" id="temperatura" rows="6">
                    </div>

                    <div class="form-group">
                        <label for="fRespiratoria">Frecuencia Respiratoria (res/min)</label>
                        <input class="form-control" name="fRespiratoria" value="{{ isset($nefropediatria->fRespiratoria)?$nefropediatria->fRespiratoria:old('fRespiratoria') }}" id="fRespiratoria" rows="6">
                    </div>
                    
                </div>
                <div class="col-1">
                </div>
            </div>
        </div>
        <div class="text-center">
        <br>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Siguiente <i class="bi bi-chevron-right"></i></button>
          </div>  
        </div>
        <div class="row setup-content" id="step-2">
        <div class="col-1">
            </div>
                <div class="col-10">
                    <h3 class="text-center"><i class="bi bi-clipboard"></i> Análisis</h3>
                    

                <div class="container">
                    <div class="form-group">
                        <label for="analisis">Análisis</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="analisis" value="{{ isset($nefropediatria->analisis)?$nefropediatria->analisis:old('analisis') }}" id="analisis" rows="13"></textarea>        
                    </div>
            <div class="col-1">
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary prevBtn btn-lg pull-left" type="button"><i class="bi bi-chevron-left"></i> Anterior</button>

            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Siguiente <i class="bi bi-chevron-right"></i></button>
          </div>  
        </div>
        <div class="row setup-content" id="step-3">
        <div class="col-1">
            </div>
                <div class="col-10">
                    <h3 class="text-center"><i class="bi bi-clipboard"></i> Diagnóstico</h3>
                    

                <div class="container">
                    <div class="form-group">
                        <label for="diagnostico">Diagnóstico</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="diagnostico" value="{{ isset($nefropediatria->diagnostico)?$nefropediatria->diagnostico:old('diagnostico') }}" id="diagnostico" rows="13"></textarea>        
                    </div>
            <div class="col-1">
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary prevBtn btn-lg pull-left" type="button"><i class="bi bi-chevron-left"></i> Anterior</button>

            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Siguiente <i class="bi bi-chevron-right"></i></button>
          </div>  
        </div>
        
        <div class="row setup-content" id="step-4">
        <div class="col-1">
            </div>
                <div class="col-10">
                    <h3 class="text-center"><i class="bi bi-clipboard"></i> Tratamiento</h3>
                    

                <div class="container">
                    <div class="form-group">
                        <label for="tratamiento">Tratamiento</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="tratamiento" value="{{ isset($nefropediatria->tratamiento)?$nefropediatria->tratamiento:old('tratamiento') }}" id="tratamiento" rows="11"></textarea>        
                    </div>
                
                    <div class="form-group">
                        <label for="medico">Médico</label>
                        <input class="form-control" name="medico" value="{{ isset($nefropediatria->medico)?$nefropediatria->medicoa:old('medico') }}" id="medico" rows="6">
                    </div>
            <div class="col-1">
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary prevBtn btn-lg pull-left" type="button"><i class="bi bi-chevron-left"></i> Anterior</button>
            <button class="btn btn-success btn-lg pull-right" type="submit"><i class="bi bi-pencil-square"></i> Registrar</button>
        </div> 
        </div>

        


        
        
      </div> 

        </div>
    </div>
  </div> 
    </div>
    </div>   
    </div>
    </div>
    </form>
</div>

 

  <br>

  
  <!-- <script type="text/javascript">
      $('.date').datepicker({  
         format: 'yyyy-mm-dd'
       });  
  </script> -->
  <script>
   $(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn'),
  		  allPrevBtn = $('.prevBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });
  
  allPrevBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

          prevStepWizard.removeAttr('disabled').trigger('click');
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});
  </script>

</form>
</div>
@endsection