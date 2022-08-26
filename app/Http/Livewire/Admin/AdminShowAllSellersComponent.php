<?php

namespace App\Http\Livewire\Admin;

use App\Models\Seller;
use Livewire\Component;
use Livewire\WithPagination;

class AdminShowAllSellersComponent extends Component
{
    use WithPagination;
    public $searchTerm;

    public function deleteProfile($seller_id)
    {
        $sellerprofile = Seller::where('seller_id',$seller_id)->first();
        $sellerprofile->delete();;
        session()->flash('message','Profile has been deleted successfully!');
    }

    public function render()
    {
        $search = '%' . $this->searchTerm . '%';   
        $sellers = Seller::where('service_location','LIKE',$search)
        ->orwhere('nid','LIKE',$search)
        ->orwhere('mobile','LIKE',$search)
        ->orwhere('seller_id','LIKE',$search)
        ->orderBy('created_at','DESC')->paginate(10);
        return view('livewire.admin.admin-show-all-sellers-component',['sellers'=>$sellers])->layout('layouts.dashboard');
    }
}
