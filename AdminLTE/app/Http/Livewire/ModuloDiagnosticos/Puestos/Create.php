<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Puestos;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Puesto;

use Illuminate\Support\Facades\DB;

class Create extends Component
{
    public $nombre, $descripcion, $estatus;

    public $reporta_a = 'null';

    protected $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'reporta_a' => 'required',
        'estatus' => 'required'
    ];

    public function save(){
        $this->validate();

        $consulta = DB::table('puestos')->where('nombre', '=', $this->nombre)->get();
        $contador = count($consulta);

        if($contador > 0){
            $this->emit('error', 'El nombre del puesto que sea desea registrar, ¡Ya existe!');
        }else{
            Puesto::create([
                'nombre' => $this->nombre,
                'descripcion' => $this->descripcion,
                'reporta_a' => $this->reporta_a,
                'estatus' => $this->estatus
            ]);
    
            $this->reset(['nombre', 'descripcion', 'estatus', 'reporta_a']);
    
            $this->emit('alert', '¡Se agregó el puesto con exito!');
        }
    }
    public function render()
    {
        $puestos = Puesto::all();

        return view('livewire.modulo-diagnosticos.puestos.create', compact('puestos'));
    }
}
