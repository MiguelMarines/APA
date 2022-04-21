<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class nefropediatria extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'beneficiario_id'=> $this->beneficiario_id, 
            'padecimiento'=> $this->padecimiento,
            'brazoD'=> $this->brazoD,
            'brazoI'=> $this->brazoI,
            'fCardiaca'=> $this->fCardiaca,
            'fRespiratoria'=> $this->fRespiratoria,
            'temperatura'=> $this->temperatura,
            'peso'=> $this->peso,
            'talla'=> $this->talla,
            'cabeza'=> $this->cabeza,
            'torax'=> $this->torax,
            'abdomen'=> $this->abdomen,
            'extremidades'=> $this->extremidades,
            'mental'=> $this->mental,
            'observaciones'=> $this->observaciones,
            'diagnostico'=> $this->diagnostico,
            'tratamiento'=> $this->tratamiento,
        ];
    }
}