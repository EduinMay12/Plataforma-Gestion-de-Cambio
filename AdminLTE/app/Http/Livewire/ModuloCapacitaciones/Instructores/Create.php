<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Instructores;

use Livewire\Component;
use App\Models\ModuloCapacitaciones\Instructore;
use App\Models\User;

class Create extends Component
{
    public $resena;
    public $status;
    public $user_id;

    protected $rules = [
        'resena' => 'required',
        'status' => 'required',
        'user_id' => 'required|unique:instructores'
    ];

    public function save()
    {
        $this->validate();

        Instructore::create([
            'resena' => $this->resena,
            'status' => $this->status,
            'user_id' => $this->user_id
        ]);

        $this->reset(['resena', 'status', 'user_id']);

        $this->emit('alert', '¡Se agregó el instructor con exito!');
    }

    public function render()
    {
        $users = User::all();
        return view('livewire.modulo-capacitaciones.instructores.create', compact('users'));
    }
}
