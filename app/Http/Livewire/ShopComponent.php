<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
/* use Livewire\WithPagination; */
use Cart;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Sale;

class ShopComponent extends Component
{
    public $sorting;
    public $totalRecords;
    public $loadAmount = 10;

    public $min_price;
    public $max_price;
 
    public $sale_paginate;

    public function loadMore()
    {
        $this->loadAmount += 10;
    }

    public function mount()
    {
        $this->sorting = "default";
        $this->totalRecords = Product::count();
        $this->sale_paginate = 12;

        $this->min_price = 0;
        $this->max_price = 100000;


    }
    public function store($product_id,$product_name,$product_price)
    {
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        $this->emitTo('cart-count-component','refreshComponent');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('product.cart');
    }
    public function addToWishlist($product_id,$product_name,$product_price)
    {
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component','refreshComponent');
    }

    public function removeFromWishlist($product_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem)
        {
            if($witem->id == $product_id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-count-component','refreshComponent');
                return;
            }
        }
    }

    public function render()
    {
        if($this->sorting == 'date')
        {
            $products = Product::whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('created_at','DESC')->limit($this->loadAmount)
                    ->get();
        }
        else if($this->sorting == "price")
        {
            $products = Product::whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('regular_price','ASC')->limit($this->loadAmount)
                    ->get();
        }
        else if($this->sorting == "price-desc")
        {
            $products = Product::whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('regular_price','DESC')->limit($this->loadAmount)
                    ->get();
        }
        else
        {
            $products = Product::whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('created_at', 'desc')
            ->limit($this->loadAmount)
            ->get();
        }
        $categories = Category::all();

        $sale = Sale::find(1);
        $sproducts = Product::where('sale_price','>',0)->paginate($this->sale_paginate);


        if(Auth::check())
        {
            Cart::instance('cart')->store(Auth::user()->email);
            Cart::instance('wishlist')->store(Auth::user()->email);
            $this->emitTo('cart-count-component','refreshComponent');
            $this->emitTo('wishlist-count-component','refreshComponent');
        }
        $popular_products = Product::popularThisWeek()->orderBy('created_at','ASC')->get()->take(10);
        return view('livewire.shop-component',['products'=> $products,'popular_products'=>$popular_products,'categories'=>$categories,'sale'=>$sale,'sproducts'=>$sproducts])->layout("layouts.base");
    }
}
