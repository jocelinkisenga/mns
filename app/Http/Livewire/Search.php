<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Search extends Component
{
    public $records;
    public $search_text;
    public function render()
    {
        return view('livewire.search');
    }


    public function search(){

        if(!empty($this->search_text)){

        $this->records = Product::orderby('name','asc')
        ->select('*')
        ->where('name','like','%'.$this->search_text.'%')
        ->limit(5)
        ->get();
    }

}
}
