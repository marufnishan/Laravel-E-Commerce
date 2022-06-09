<?php

namespace App\Http\Livewire\Admin;

use App\Models\Seller;
use Livewire\Component;
use Livewire\WithPagination;

class AdminShowAllSellersComponent extends Component
{
    use WithPagination;
    public $searchTerm;

    public function render()
    {   
        $sellers = Seller::where('service_location','LIKE',$this->searchTerm)
        ->orwhere('nid','LIKE',$this->searchTerm)
        ->orwhere('mobile','LIKE',$this->searchTerm)
        ->orwhere('seller_id','LIKE',$this->searchTerm)
        ->orderBy('created_at','DESC')->paginate(10);
        return view('livewire.admin.admin-show-all-sellers-component',['sellers'=>$sellers])->layout('layouts.base');
    }
}
