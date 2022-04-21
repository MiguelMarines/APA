<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beneficiario;
use App\Http\Resources\Beneficiario as BeneficiarioResource;
use App\Models\nefropediatria;

class nefropediatriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $beneficiario=Beneficiario::findOrFail($id);
        return view('nefropediatria.create',compact('beneficiario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'beneficiario_id' => 'required',
        ]);

        $nefropediatria = new nefropediatria([
            'fecha'=> request('fecha'),
            'peso'=> request('peso'),
            'talla'=> request('talla'),
            'tension'=> request('tension'),
            'temperatura'=> request('temperatura'),
            'fCardiaca'=> request('fCardiaca'),
            'fRespiratoria'=> request('fRespiratoria'),
            'analisis'=> request('analisis'),
            'diagnostico'=> request('diagnostico'),
            'tratamiento'=> request('tratamiento'),
            'medico'=> request('medico'),
        ]);

         $id = request('beneficiario_id');
         $beneficiario = Beneficiario::find($id);
         $beneficiario->nefropediatria()->save($nefropediatria);

        return redirect('beneficiario/'.$id)->with('nuevo','Consulta Registrada Exitósamente!');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nefropediatria=nefropediatria::findOrFail($id);
        return view('nefropediatria.show',compact('nefropediatria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nefropediatria=nefropediatria::findOrFail($id);
        return view('nefropediatria.edit',compact('nefropediatria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nefropediatria=nefropediatria::findOrFail($id);
        
        $id=$nefropediatria->beneficiario_id;

        if(request('fecha') != null){
            $fecha = request('fecha');
        }
        else{
            $fecha = $nefropediatria->fecha;
        }

        $success = $nefropediatria->update([
            'fecha'=> $fecha,
            'peso'=> request('peso'),
            'talla'=> request('talla'),
            'tension'=> request('tension'),
            'temperatura'=> request('temperatura'),
            'fCardiaca'=> request('fCardiaca'),
            'fRespiratoria'=> request('fRespiratoria'),
            'analisis'=> request('analisis'),
            'diagnostico'=> request('diagnostico'),
            'tratamiento'=> request('tratamiento'),
            'medico'=> request('medico'),
        ]);
        return redirect('beneficiario/'.$id)->with('editado','Cambios Consulta Guardados Exitósamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nefropediatria = nefropediatria::find($id);
        $id=$nefropediatria->beneficiario_id;
        $success = $nefropediatria->delete();

        return redirect('beneficiario/'.$id)->with('nuevo','Consulta Borrada Exitósamente!');
    }

}