<?php

namespace App\Http\Livewire\Seller;

use App\Models\Seller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SellerProfileComponent extends Component
{
    public function render()
    {
        $sellerProfile = Seller::where('seller_id',Auth::user()->id)->first();
        if(!$sellerProfile)
        {
            $seller = new seller();
            $seller->seller_id = Auth::user()->id;
            $seller->save();
        }
        $seller = User::find(Auth::user()->id);
        return view('livewire.seller.seller-profile-component',['seller'=>$seller])->layout('layouts.dashboard');
    }
}
