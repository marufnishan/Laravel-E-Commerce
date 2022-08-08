<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Seller;
use Illuminate\Http\Request;
use Livewire\Component;

class SellerShopComponent extends Component
{

    public function render(Request $req)
    {
        $sellerproducts = Product::where('seller_id',$req->id)->get();
        $seller = Seller::where('seller_id',$req->id)->first();
        return view('livewire.seller-shop-component',['sellerproducts'=>$sellerproducts,'seller'=>$seller])->layout("layouts.base");
    }
}
