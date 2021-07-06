<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Categorias;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ModuloCapacitaciones\Categoria;

class Create extends Component
{
    use WithFileUploads;

    public $nombre;
    public $descripcion;
    public $imagen;
    public $contador = 0;
    public $status;
    public $identificador;

    public function mount()
    {
        $this->identificador = rand();
    }

    protected $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required|image|max:2048',
        'contador' => 'required',
        'status' => 'required'
    ];


    public function save()
    {
        $this->validate();

        $imagen = $this->imagen->store('categorias');

        Categoria::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'imagen' => $imagen,
            'contador' => $this->contador,
            'status' => $this->status
        ]);

        $this->reset(['nombre', 'descripcion', 'imagen', 'contador','status']);

        $this->identificador = rand();

        $this->emit('alert', '!Se agregó la categoria con exito¡');
    }

    public function render()
    {
        return view('livewire.modulo-capacitaciones.categorias.create');
    }
}
