<?php

namespace App\Http\Livewire\Seller;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class SellerProductComponent extends Component
{
    use WithPagination;
    public $searchTerm;

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        if($product->image)
        {
            unlink('assets/images/products'.'/'.$product->image);
        }

        if($product->images)
        {
            
            foreach(explode(",",$product->images,-1) as $image)
            {
                unlink('assets/images/products'.'/'.$image);
            }
        } 
        
        $product->delete();
        session()->flash('message','Product has been deleted successfully');
    }
    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $products = Product::where('seller_id',Auth::user()->id)->where('name','LIKE',$search)
        ->orwhere('seller_id',Auth::user()->id)->where('stock_status','LIKE',$search)
        ->orwhere('seller_id',Auth::user()->id)->where('regular_price','LIKE',$search)
        ->orwhere('seller_id',Auth::user()->id)->where('sale_price','LIKE',$search)
        ->orwhere('seller_id',Auth::user()->id)->where('id','LIKE',$search)->paginate(10);
        return view('livewire.seller.seller-product-component',['products'=>$products])->layout('layouts.dashboard');
    }
}
