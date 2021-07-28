<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Niveles;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Nivel;

class Edit extends Component
{

   public $nivele;

    public function mount(Nivel $nivele){
        $this->nivele = $nivele;
    }

    protected $rules = [
        'nivele.nombre' => 'required',
    ];

    public function save(){
        $this->validate();

        $this->nivele->save();

        //$this->reset(['nombre']);

        $this->emit('alert', '¡El nivel se actualizó con exito!');
    }

    public function render()
    {
        return view('livewire.modulo-diagnosticos.niveles.edit');
    }
}
