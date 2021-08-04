<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Cuestionario3s;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Cuestionario3;

class Edit extends Component
{

    public $cuestionario3;

    public function mount(Cuestionario3 $cuestionario3){
        $this->cuestionario3 = $cuestionario3;
    }

    protected $rules = [
        'cuestionario3.nombre' => 'required',
        'cuestionario3.descripcion' => 'required',
        'cuestionario3.estatus' => 'required'
    ];

    public function save(){
        $this->validate();

        $this->cuestionario3->save();

        $this->emit('alert', '¡El cuestionario se actualizó con exito!');
    }
    public function render()
    {
        return view('livewire.modulo-diagnosticos.cuestionario3s.edit');
    }
}
