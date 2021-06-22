<?php

namespace App\Http\Livewire\Admin;

use App\Models\Cupon;
use Livewire\Component;

class AdminAddCouponsComponent extends Component
{
    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $expiry_date;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'code' => 'required|unique:cupons',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
            'expiry_date' => 'required'
        ]);
    }
    public function storeCoupon()
    {
        $this->validate([
            'code' => 'required|unique:cupons',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
            'expiry_date' => 'required'
        ]);

        $coupons = new Cupon();
        $coupons->code = $this->code;
        $coupons->type = $this->type;
        $coupons->value = $this->value;
        $coupons->cart_value = $this->cart_value;
        $coupons->expiry_date = $this->expiry_date;
        $coupons->save();
        session()->flash('message','Coupon has been created successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-coupons-component')->layout('layouts.base');
    }
}
