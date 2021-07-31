<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Competencias;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Competencia;

class Edit extends Component
{

    public $competencia;

    public function mount(Competencia $competencia){
        $this->competencia = $competencia;
    }

    protected $rules = [
        'competencia.nombre' => 'required',
        'competencia.descripcion'=> 'required',
        'competencia.accionCorta1_ba' => 'required',
        'competencia.accionCorta2_ba' => 'required',
        'competencia.accionCorta3_ba' => 'required',
        'competencia.accionLarga1_ba' => 'required',
        'competencia.accionLarga2_ba' => 'required',
        'competencia.accionLarga3_ba' => 'required',
        'competencia.accionCorta1_ca' => 'required',
        'competencia.accionCorta2_ca' => 'required',
        'competencia.accionCorta3_ca' => 'required',
        'competencia.accionLarga1_ca' => 'required',
        'competencia.accionLarga2_ca' => 'required',
        'competencia.accionLarga3_ca' => 'required',
        'competencia.accionCorta1_ex' => 'required',
        'competencia.accionCorta2_ex' => 'required',
        'competencia.accionCorta3_ex' => 'required',
        'competencia.accionLarga1_ex' => 'required',
        'competencia.accionLarga2_ex' => 'required',
        'competencia.accionLarga3_ex' => 'required',
        'competencia.estatus' => 'required'

    ];

    public function save(){
        $this->validate();

        $this->competencia->save();

        $this->emit('alert', '¡La competencia se actualizó con exito!');
    }
    public function render()
    {
        return view('livewire.modulo-diagnosticos.competencias.edit');
    }
}
