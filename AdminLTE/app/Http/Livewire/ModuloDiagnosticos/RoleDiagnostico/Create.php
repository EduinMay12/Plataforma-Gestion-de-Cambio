<?php

namespace App\Http\Livewire\ModuloDiagnosticos\RoleDiagnostico;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\RoleDiagnostico;

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

        $consulta = DB::table('role_diagnosticos')->where('nombre', '=', $this->nombre)->get();
        $contador = count($consulta);

        if($contador > 0){
            $this->emit('error', 'El nombre del rol evaluación que desea registrar, ¡Ya existe!');
        }else{
            RoleDiagnostico::create([
                'nombre' => $this->nombre,
                'descripcion' => $this->descripcion,
                'estatus' => $this->estatus
            ]);
    
            $this->reset(['nombre', 'descripcion', 'estatus']);
    
            $this->emit('alert', '¡Se agregó el rol evaluación con exito!');
        }
    }
    public function render()
    {
        return view('livewire.modulo-diagnosticos.role-diagnostico.create');
    }
}
