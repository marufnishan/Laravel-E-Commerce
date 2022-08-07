<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Http\Request;
use Livewire\Component;

class SellerShopComponent extends Component
{

    public function render(Request $req)
    {
        $sellerproducts = Product::where('seller_id',$req->id)->get();
        return view('livewire.seller-shop-component',['sellerproducts'=>$sellerproducts])->layout("layouts.base");
    }
}
