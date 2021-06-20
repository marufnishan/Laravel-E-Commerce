<?php

namespace App\Http\Livewire\Admin;

use App\Models\Cupon;
use Livewire\Component;

class AdminCouponsComponent extends Component
{
    public function deleteCoupon($coupon_id)
    {
        $coupons = Cupon::find($coupon_id);
        $coupons->delete();
        session()->flash('message','Coupon has been deleted successfully!');
    }
    public function render()
    {
        $coupons =Cupon::all();
        return view('livewire.admin.admin-coupons-component',['coupons'=>$coupons])->layout('layouts.base');
    }
}
