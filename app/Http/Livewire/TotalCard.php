<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TotalCard extends Component
{
   
    protected $listeners = ["addtocart" => "render"];
    public function render()
    {
        return view('livewire.total-card');
    }
}
