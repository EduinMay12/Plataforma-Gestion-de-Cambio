<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Cuestionario1s;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Cuestionario1;

class Edit extends Component
{

    public $cuestionario1;
    public $nombre;
    public $descripcion;
    public $estatus;

    public function mount(Cuestionario1 $cuestionario1){
        $this->cuestionario1 = $cuestionario1;
        $this->nombre = $cuestionario1->nombre;
        $this->descripcion = $cuestionario1->descripcion;
        $this->estatus = $cuestionario1->estatus;
    }

    /*
    protected $rules = [
        'cuestionario1.nombre' => 'required',
        'cuestionario1.descripcion' => 'required',
        'cuestionario1.estatus' => 'required'
    ];*/

    public function save(){
        $this->validate(
            [
                'nombre' => 'required',
                'descripcion' => 'required',
                'estatus' => 'required'
            ],
            [
                'nombre.required' => 'El campo nombre es obligatorio',
                'descripcion.required' => 'El campo descripción es obligatorio',
                'estatus.required' => 'El campo estatus es obligatorio'
            ]
        );

        $this->cuestionario1->save();

        $this->emit('alert', '¡El cuestionario se actualizó con exito!');
    }
    public function render()
    {
        return view('livewire.modulo-diagnosticos.cuestionario1s.edit');
    }
}
