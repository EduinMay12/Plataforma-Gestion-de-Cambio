<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Alumno;

use Livewire\Component;
use App\Models\ModuloDiagnosticos\Alumno;

use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $view = 'table';

    public $nombre;
    public $apellido;

    public $alumno;
    public $alumno_id;

    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '5';

    protected $paginationTheme = 'bootstrap';

    protected $queryString = [
        'search' => ['except' => ''],
        'sort' => ['except' => 'id'],
        'direction' => ['except' => 'desc'],
        'cant' => ['except' => '5']
    ]; 

    protected $listeners = ['destroy'];

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $alumnos = Alumno::where('nombre', 'like', '%' . $this->search . '%')
                                ->where('apellido', 'like', '%' . $this->search . '%')
                                ->orderBy($this->sort, $this->direction)
                                ->paginate($this->cant);

        return view('livewire.modulo-diagnosticos.alumno.index', compact('alumnos'));
    }

    public function table(Alumno $alumno){
        $this->alumno = $alumno;
        $this->alumno_id = $alumno->id;
        $this->view = 'table';
    }

    public function create(){
        $this->view = 'create';
    }

    public function store(){
        $this->validate([
            'nombre' => 'required',
            'apellido' => 'required'
        ]);

        Alumno::create([
            'nombre' => $this->nombre,
            'apellido' => $this->apellido
        ]);

        $this->reset(['nombre', 'apellido']);

        $this->emit('alert', '¡Alumno guardado con exito!');
    }

    public function show(Alumno $alumno){
        $this->alumno = $alumno;

        $this->view = 'show';
    }

    public function edit(Alumno $alumno){
        $this->alumno = $alumno;
        $this->alumno_id = $alumno->id;

        $this->nombre = $alumno->nombre;
        $this->apellido = $alumno->apellido;

        $this->view = 'edit';
    }

    public function update(){
        $this->validate([
            'nombre' => 'required',
            'apellido' => 'required',
        ]);

        $alumno = Alumno::find($this->alumno->id);

        $alumno->update([
            'nombre' => $this->nombre,
            'apellido' => $this->apellido
        ]);

        $this->emit('alert', '¡Alumno actualizado con exito!');
    }

    public function destroy(Alumno $alumno){
        $this->alumno = $alumno;
        $this->alumno_id = $alumno->id;

        $alumno->delete($this->alumno_id);

        $this->emit('alert', '¡Alumno eliminado con exito!');
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
