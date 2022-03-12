<?php

namespace App\Http\Livewire\Admin;

use App\Models\Seller;
use Livewire\Component;

class AdminShowAllSellersComponent extends Component
{
    public function render()
    {   
        $sellers = Seller::all();
        return view('livewire.admin.admin-show-all-sellers-component',['sellers'=>$sellers])->layout('layouts.base');
    }
}
