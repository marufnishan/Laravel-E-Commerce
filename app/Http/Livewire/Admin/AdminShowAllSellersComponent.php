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
        $search = '%' . $this->searchTerm . '%';   
        $sellers = Seller::where('service_location','LIKE',$search)
        ->orwhere('nid','LIKE',$search)
        ->orwhere('mobile','LIKE',$search)
        ->orwhere('seller_id','LIKE',$search)
        ->orderBy('created_at','DESC')->paginate(10);
        return view('livewire.admin.admin-show-all-sellers-component',['sellers'=>$sellers])->layout('layouts.base');
    }
}
