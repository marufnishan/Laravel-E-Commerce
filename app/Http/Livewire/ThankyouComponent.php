<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Cart;

class ThankyouComponent extends Component
{
    protected $listeners = ['refreshComponent'=>'$refresh'];
    public function render()
    {
        if(Auth::check())
        {
            Cart::instance('cart')->store(Auth::user()->email);
            Cart::instance('wishlist')->store(Auth::user()->email);
            $this->emitTo('cart-count-component','refreshComponent');
            $this->emitTo('wishlist-count-component','refreshComponent');
        }
        return view('livewire.thankyou-component')->layout("layouts.base");
    }
}
