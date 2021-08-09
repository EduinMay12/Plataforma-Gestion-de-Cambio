<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Cuestionario2s;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Cuestionario2;

class Edit extends Component
{

    public $cuestionario2;

    public function mount(Cuestionario2 $cuestionario2){
        $this->cuestionario2 = $cuestionario2;
    }

    protected $rules = [
        'cuestionario2.nombre' => 'required',
        'cuestionario2.descripcion' => 'required',
        'cuestionario2.estatus' => 'required'
    ];

    public function save(){
        $this->validate();

        $this->cuestionario2->save();

        $this->emit('alert', '¡El cuestionario se actualizó con exito!');
    }
    public function render()
    {
        return view('livewire.modulo-diagnosticos.cuestionario2s.edit');
    }
}
