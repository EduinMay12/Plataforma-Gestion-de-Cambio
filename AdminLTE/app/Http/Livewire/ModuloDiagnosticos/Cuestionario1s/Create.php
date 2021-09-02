<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Cuestionario1s;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Cuestionario1;

use Illuminate\Support\Facades\DB;

class Create extends Component
{

    public $nombre, $descripcion, $estatus;

    /*
    protected $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'estatus' => 'required'
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
                'descripcion.required' => 'El campo descripcion es obligatorio',
                'estatus.required' => 'El campo estatus es obligatorio'
            ]
        );

        $consulta = DB::table('cuestionario1s')
                    ->where('nombre', '=', $this->nombre)->get();
        $contador = count($consulta);

        if($contador > 0){
            $this->emit('error', 'El nombre del cuestionario que desea registrar, ¡Ya existe!');
        }else{
            Cuestionario1::create([
                'nombre' => $this->nombre,
                'descripcion' => $this->descripcion,
                'estatus' => $this->estatus
            ]);
    
            $this->reset(['nombre', 'descripcion', 'estatus']);
    
            $this->emit('alert', '¡Se agregó el cuestionario con exito!');
        }
    }
    public function render()
    {
        return view('livewire.modulo-diagnosticos.cuestionario1s.create');
    }
}
