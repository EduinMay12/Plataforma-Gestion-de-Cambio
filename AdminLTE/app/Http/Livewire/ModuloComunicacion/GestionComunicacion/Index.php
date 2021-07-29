<?php

namespace App\Http\Livewire\ModuloComunicacion\GestionComunicacion;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\ModuloComunicacion\Comunicacion;
use Illuminate\Http\Request;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $view = 'table';

    public $cant = '10';
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';

    public $descripcion;
    public $name;
    public $comunicacion;
    public $imagen;
    public $status;
    public $identificador;

    protected $paginationTheme = "bootstrap";

    protected $listeners =['delete'];

    protected $queryString =
    [
        'cant' => ['except' => '10'],
        'sort' => ['except' => 'id'],
        'direction' => ['except' => 'desc'],
        'search' => ['except' => '']
    ];

    protected $rules =
    [
        'name' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required|image|max:2048',
        'status' => 'required'
    ];

    public function mount()
    {
        $this->identificador = rand();
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

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $comunicacions = Comunicacion::where('name', 'like' , '%' . $this->search . '%')
                    ->orWhere('descripcion', 'like' , '%' . $this->search . '%')
                    ->orderBy($this->sort, $this->direction)
                    ->paginate($this->cant);
        return view('livewire.modulo-comunicacion.gestion-comunicacion.index', compact('comunicacions'));
    }

    public function create(Comunicacion $comunicacion)
    {
        $this->view = 'create';
    }

    public function save()
    {
        $this->validate();

        $imagen = $this->imagen->store('comunicacion');

        Comunicacion::create([
            'name' => $this->name,
            'descripcion' => $this->descripcion,
            'imagen' => $imagen,
            'status' => $this->status
        ]);

        $this->reset(['name', 'descripcion', 'imagen', 'status']);

        $this->identificador = rand();

        $this->emit('alert', '!Se Agregó una Categoria con Exito¡');
    }

    public function show(Comunicacion $comunicacion)
    {
        $this->comunicacion = $comunicacion;
        $this->view = 'show';
    }

    public function delete(Comunicacion $comunicacion)
    {
        $comunicacion->delete();
    }

    public function edit( Comunicacion $comunicacion)
    {

        $this->name = $comunicacion->name;
        $this->imagen_curso = $comunicacion->imagen;
        $this->descripcion = $comunicacion->descripcion;
        $this->status = $comunicacion->status;
        $this->view = 'edit';
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'status' => 'required'
        ]);

        if ($this->imagen) {
            Storage::delete([$this->imagen]);
            $this->imagen = $this->imagen->store('comunicacion');
        }

        $comunicacion->update([
            'name' => $this->name,
            'imagen' => $this->imagen,
            'descripcion' => $this->descripcion,

            'status' => $this->status
        ]);

        $this->identificador = rand();

        $this->emit('alert', '!Se actualizó la Categoria de la Comunicacion con Exito¡');

    }
}
