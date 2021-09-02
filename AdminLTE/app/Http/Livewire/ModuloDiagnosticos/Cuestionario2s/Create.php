<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Cuestionario2s;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Cuestionario2;

use Illuminate\Support\Facades\DB;

class Create extends Component
{

    public $nombre, $descripcion, $estatus;

    protected $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'estatus' => 'required'
    ];

    public function save(){
        $this->validate();

        $consulta = DB::table('cuestionario2s')
                    ->where('nombre', '=', $this->nombre)->get();
        $contador = count($consulta);

        if($contador > 0){
            $this->emit('error', 'El nombre del cuestionario que desea registrar, ¡Ya existe!');
        }else{
            Cuestionario2::create([
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
        return view('livewire.modulo-diagnosticos.cuestionario2s.create');
    }
}
