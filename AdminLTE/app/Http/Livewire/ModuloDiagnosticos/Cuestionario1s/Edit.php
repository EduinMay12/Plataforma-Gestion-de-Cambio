<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Cuestionario1s;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Cuestionario1;

class Edit extends Component
{

    public $cuestionario1;

    public function mount(Cuestionario1 $cuestionario1){
        $this->cuestionario1 = $cuestionario1;
    }

    protected $rules = [
        'cuestionario1.nombre' => 'required',
        'cuestionario1.descripcion' => 'required',
        'cuestionario1.estatus' => 'required'
    ];

    public function save(){
        $this->validate();

        $this->cuestionario1->save();

        $this->emit('alert', '¡El cuestionario se actualizó con exito!');
    }
    public function render()
    {
        return view('livewire.modulo-diagnosticos.cuestionario1s.edit');
    }
}
