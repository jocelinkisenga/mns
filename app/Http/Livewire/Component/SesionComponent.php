<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class SesionComponent extends Component
{
    protected $listeners = ["cardcounter", "render"];
    public function render()
    {
        return view('livewire.component.sesion-component');
    }
}
