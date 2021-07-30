<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Cuestionarios;

use Livewire\Component;
use App\Models\ModuloCapacitaciones\Cuestionario;
use App\Models\ModuloCapacitaciones\Pregunta;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    //variables para filtro
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $view = 'table';
    public $cant = '5';
    public $cuestionario;


    //variables del crud
    public $cuestionario_id;
    public $nombre;
    public $descripcion;
    public $status;

    protected $paginationTheme = "bootstrap";

    protected $listeners = ['destroy'];

    protected $queryString = [
        'cant' => ['except' => '5'], 
        'sort' => ['except' => 'id'], 
        'direction' => ['except' => 'desc'], 
        'search' => ['except' => '']
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $cuestionarios = Cuestionario::where('nombre', 'like', '%' . $this->search . '%')
            ->orWhere('descripcion', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->paginate($this->cant);

        return view('livewire.modulo-capacitaciones.cuestionarios.index', compact('cuestionarios'));
    }

    public function table()
    {
        $this->reset(['nombre', 'descripcion', 'status']);
        $this->validate([
            'nombre' => '',
            'descripcion' => '',
            'status' => ''
        ]);
        $this->view = 'table';
    }

    public function create()
    {
        $this->view = 'create';
    }

    public function store()
    {
        $this->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'status' => 'required'
        ]);

        Cuestionario::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'status' => $this->status
        ]);

        $this->reset(['nombre', 'descripcion', 'status']);

        $this->emit('alert', '!Se agregó el cuestionario con exito¡');
    }

    public function show(Cuestionario $cuestionario)
    {
        $this->cuestionario = $cuestionario;
        $this->view = 'show';
    }

    public function edit(Cuestionario $cuestionario)
    {
        $this->cuestionario_id = $cuestionario->id;
        $this->nombre = $cuestionario->nombre;
        $this->descripcion = $cuestionario->descripcion;
        $this->status = $cuestionario->status;

        $this->view = 'edit';
    }

    public function update()
    {
        $this->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'status' => 'required'
        ]);

        $cuestionario = Cuestionario::find($this->cuestionario_id);

        $cuestionario->update([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'status' => $this->status
        ]);

        $this->emit('alert', '!Se actualizó el cuestionario con exito¡');
    }

    public function destroy(Cuestionario $cuestionario)
    {
        $preguntas = Pregunta::where('cuestionario_id', '=', $cuestionario->id)->get();
        $contadorPreguntas = count($preguntas);

        $actividades = DB::table('actividades')->where('cuestionario_id','=', $cuestionario->id)->get();
        $contadorActividades = count($actividades);
        
        if($contadorPreguntas > 0){
            $this->emit('error', 'Este cuestionario no se puede eliminar, contiene preguntas');
        }elseif($contadorActividades > 0){
            $this->emit('error', 'Este cuestionario no se puede eliminar, contiene actividades');
        }else{
            $cuestionario->delete();
            $this->emit('alert', '¡Cuestionario eliminado con exito!');
        }
        
    }

    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }
}
