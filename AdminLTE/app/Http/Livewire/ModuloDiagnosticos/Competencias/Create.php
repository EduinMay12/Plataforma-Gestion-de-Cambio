<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Competencias;

use Livewire\Component;

use Illuminate\Support\Facades\DB;

use App\Models\ModuloDiagnosticos\Competencia;

class Create extends Component
{
    public $nombre, $descripcion,
            $accionCorta1_ba, $accionCorta2_ba, $accionCorta3_ba,
            $accionLarga1_ba, $accionLarga2_ba, $accionLarga3_ba,
            $accionCorta1_ca, $accionCorta2_ca, $accionCorta3_ca,
            $accionLarga1_ca, $accionLarga2_ca, $accionLarga3_ca,
            $accionCorta1_ex, $accionCorta2_ex, $accionCorta3_ex,
            $accionLarga1_ex, $accionLarga2_ex, $accionLarga3_ex,
            $estatus;

    public function save(){
        $this->validate(
            [
                'nombre' => 'required',
                'descripcion' => 'required',
                'accionCorta1_ba' => 'required',
                'accionCorta2_ba' => 'required',
                'accionCorta3_ba' => 'required',
                'accionLarga1_ba' => 'required',
                'accionLarga2_ba' => 'required',
                'accionLarga3_ba' => 'required',
                'accionCorta1_ca' => 'required',
                'accionCorta2_ca' => 'required',
                'accionCorta3_ca' => 'required',
                'accionLarga1_ca' => 'required',
                'accionLarga2_ca' => 'required',
                'accionLarga3_ca' => 'required',
                'accionCorta1_ex' => 'required',
                'accionCorta2_ex' => 'required',
                'accionCorta3_ex' => 'required',
                'accionLarga1_ex' => 'required',
                'accionLarga2_ex' => 'required',
                'accionLarga3_ex' => 'required',
                'estatus' => 'required'
            ],
            [
                'nombre.required' => 'El campo nombre es requerido',
                'descripcion.required' => 'El campo descrpción es requerido',
                'accionCorta1_ba.required' => 'El campo acción corta 1 básico es requerido',
                'accionCorta2_ba.required' => 'El campo acción corta 2 básico es requerido',
                'accionCorta3_ba.required' => 'El campo acción corta 3 básico es requerido',
                'accionLarga1_ba.required' => 'El campo acción larga 1 básico es requerido',
                'accionLarga2_ba.required' => 'El campo acción larga 2 básico es requerido',
                'accionLarga3_ba.required' => 'El campo acción larga 3 básico es requerido',
                'accionCorta1_ca.required' => 'El campo acción corta 1 calificado es requerido',
                'accionCorta2_ca.required' => 'El campo acción corta 2 calificado es requerido',
                'accionCorta3_ca.required' => 'El campo acción corta 3 calificado es requerido',
                'accionLarga1_ca.required' => 'El campo acción larga 1 calificado es requerido',
                'accionLarga2_ca.required' => 'El campo acción larga 2 calificado es requerido',
                'accionLarga3_ca.required' => 'El campo acción larga 3 calificado es requerido',
                'accionCorta1_ex.required' => 'El campo acción corta 1 experimentado es requerido',
                'accionCorta2_ex.required' => 'El campo acción corta 2 experimentado es requerido',
                'accionCorta3_ex.required' => 'El campo acción corta 3 experimentado es requerido',
                'accionLarga1_ex.required' => 'El campo acción larga 1 experimentado es requerido',
                'accionLarga2_ex.required' => 'El campo acción larga 2 experimentado es requerido',
                'accionLarga3_ex.required' => 'El campo acción larga 3 experimentado es requerido',
                'estatus.required' => 'El campo estatus es requerido'
            ]
        );

        $consulta = DB::table('competencias')->where('nombre', '=', $this->nombre)->get();
        $contador = count($consulta);

        if($contador > 0){
            $this->emit('error', 'El nombre de la competencia que desea registrar, ¡Ya existe!');
        }else{
            Competencia::create([
                'nombre' => $this->nombre,
                'descripcion' => $this->descripcion,
                'accionCorta1_ba' => $this->accionCorta1_ba,
                'accionCorta2_ba' => $this->accionCorta2_ba,
                'accionCorta3_ba' => $this->accionCorta3_ba,
                'accionLarga1_ba' => $this->accionLarga1_ba,
                'accionLarga2_ba' => $this->accionLarga2_ba,
                'accionLarga3_ba' => $this->accionLarga3_ba,
                'accionCorta1_ca' => $this->accionCorta1_ca,
                'accionCorta2_ca' => $this->accionCorta2_ca,
                'accionCorta3_ca' => $this->accionCorta3_ca,
                'accionLarga1_ca' => $this->accionLarga1_ca,
                'accionLarga2_ca' => $this->accionLarga2_ca,
                'accionLarga3_ca' => $this->accionLarga3_ca,
                'accionCorta1_ex' => $this->accionCorta1_ex,
                'accionCorta2_ex' => $this->accionCorta2_ex,
                'accionCorta3_ex' => $this->accionCorta3_ex,
                'accionLarga1_ex' => $this->accionLarga1_ex,
                'accionLarga2_ex' => $this->accionLarga2_ex,
                'accionLarga3_ex' => $this->accionLarga3_ex,
                'estatus'=> $this->estatus
            ]);
    
            $this->reset(['nombre', 'descripcion',
            'accionCorta1_ba', 'accionCorta2_ba', 'accionCorta3_ba',
            'accionLarga1_ba', 'accionLarga2_ba', 'accionLarga3_ba',
            'accionCorta1_ca', 'accionCorta2_ca', 'accionCorta3_ca',
            'accionLarga1_ca', 'accionLarga2_ca', 'accionLarga3_ca',
            'accionCorta1_ex', 'accionCorta2_ex', 'accionCorta3_ex',
            'accionLarga1_ex', 'accionLarga2_ex', 'accionLarga3_ex',
            'estatus']);
    
            $this->emit('alert', '¡Se agregó la competencia con exito!');
        }

    }

    public function render()
    {
        $competencias = Competencia::all();
        return view('livewire.modulo-diagnosticos.competencias.create', compact('competencias'));
    }
}
