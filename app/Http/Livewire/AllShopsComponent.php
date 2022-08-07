<?php

namespace App\Http\Livewire;

use App\Models\Seller;
use Livewire\Component;

class AllShopsComponent extends Component
{
    public function render()
    {
        $sellers = Seller::paginate(16);
        
        return view('livewire.all-shops-component',['sellers'=>$sellers])->layout("layouts.base");
    }
}
