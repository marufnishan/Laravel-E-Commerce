<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\HomeCategory;
use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\Sale;
use Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class HomeComponent extends Component
{
    protected $listeners = ['refreshComponent'=>'$refresh'];
    public function render()
    {
        
        $pproducts = Product::popularThisWeek()->orderBy('created_at','ASC')->get()->take(12);
        $sliders = HomeSlider::where('status',1)->get();
        $lproducts = Product::get()->take(12);
        $category = HomeCategory::find(1);
        $cats = explode(',',$category->sel_categories);
        $categories = Category::whereIn('id',$cats)->get();
        $no_of_products = $category->no_of_products;
        $sproducts = Product::where('sale_price','>',0)->orderBy('created_at','ASC')->get()->take(12);
        $sale = Sale::find(1);
        if(Auth::check())
        {
            Cart::instance('cart')->restore(Auth::user()->email);
            Cart::instance('wishlist')->restore(Auth::user()->email);
            
        }
        return view('livewire.home-component',['sliders'=>$sliders,'lproducts'=>$lproducts,'pproducts'=>$pproducts,'categories'=>$categories,'no_of_products'=>$no_of_products,'sproducts'=>$sproducts,'sale'=>$sale])->layout('layouts.base');
    }
}
