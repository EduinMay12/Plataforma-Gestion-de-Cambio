<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Profesor;

use Livewire\Component;
use App\Models\ModuloDiagnosticos\Profesor;
use App\Models\ModuloDiagnosticos\Alumno;

use Livewire\WithPagination;

use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;

    public $view = 'table';

    public $estudiantes;

    public $alumno_id;

    public $nombre;
    public $apellido;

    public $profesor;
    public $profesor_id;

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
        $profesores = Profesor::where('nombre', 'like', '%' . $this->search . '%')
                                ->where('apellido', 'like', '%' . $this->search . '%')
                                ->orderBy($this->sort, $this->direction)
                                ->paginate($this->cant);

        return view('livewire.modulo-diagnosticos.profesor.index', compact('profesores'));
    }

    public function table(Profesor $profesor){
        $this->profesor = $profesor;
        $this->profesor_id = $profesor->id;

        $this->validate([
            'nombre' => '',
            'apellido' => ''
        ]);

        $this->reset([
            'nombre',
            'apellido'
        ]);

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

        $this->valores = Profesor::create([
            'nombre' => $this->nombre,
            'apellido' => $this->apellido
        ]);

        $this->reset(['nombre', 'apellido']);

        $this->emit('alert', '¡Profesor guardado con exito!');
    }

    public function show(Profesor $profesor){
        $this->profesor = $profesor;

        $this->view = 'show';
    }

    public function edit(Profesor $profesor){

        $this->profesor = $profesor;
        $this->profesor_id = $profesor->id;

        $this->nombre = $profesor->nombre;
        $this->apellido = $profesor->apellido;

        $this->estudiantes = Alumno::all();

        return $this->view = 'edit';

    }

    /*
    public function insertar(Profesor $profesor){
        $this->validate([
            'alumno_id' => 'required',
            'nivel' => 'required'
        ]);

        $this->profesor = $profesor;
        $profesor = Profesor::find($this->profesor->id);


        $this->emit('alert', 'alumno_id es:' . $this->alumno_id . 'profesor_id es:' . $this->profesor->id . 'nivel es:' . $this->nivel);

    }*/


    public function insertar(Profesor $profesor){
        $this->validate([
            'alumno_id' => 'required',
        ]);

        $this->profesor = $profesor;
        $profesor = Profesor::find($this->profesor->id);

        $consulta = DB::table('alumno_profesor')->where('alumno_id', '=', $this->alumno_id)
                        ->where('profesor_id', '=', $this->profesor->id)->get();
        $contador = count($consulta);

        if($contador > 0){
            $this->emit('error', '¡Este registro ya existe!');
        }else{
            $profesor->alumnos()->attach($this->alumno_id);

            $this->reset('alumno_id');

            $this->emit('alert', '¡Alumno registrado con exito!');
    
        }
    }

    public function eliminar($pro, Profesor $profesor){
        $this->profesor = $profesor;
        $this->profesor_id = $profesor->id;

        $profesor->alumnos()->detach($pro, $this->profesor_id);
        $this->emit('alert', '¡Alumno eliminado con exito!');
 
    }

    public function update(){
        $this->validate([
            'nombre' => 'required',
            'apellido' => 'required',
        ]);

        $profesor = Profesor::find($this->profesor->id);

        $profesor->update([
            'nombre' => $this->nombre,
            'apellido' => $this->apellido
        ]);

        $this->emit('alert', '¡Profesor actualizado con exito!');
    }

    public function destroy(Profesor $profesor){
        $this->profesor = $profesor;
        $this->profesor_id = $profesor->id;

        $profesor->delete($this->profesor_id);

        $this->emit('alert', '¡Profesor eliminado con exito!');
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
