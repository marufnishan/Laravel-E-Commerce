<?php

namespace App\Http\Livewire\Seller;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class SellerProductComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::where('seller_id',Auth::user()->id)->paginate(10);
        return view('livewire.seller.seller-product-component',['products'=>$products])->layout('layouts.base');
    }
}
