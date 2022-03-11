<?php

namespace App\Http\Livewire\Seller;

use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SellerOrderComponent extends Component
{
    public function updateOrderStatus($order_id,$status)
    {
        $order = OrderItem::find($order_id);
        $order->status =$status;
        if($status == "delivered")
        {
            $order->delivered_date = DB::raw('CURRENT_DATE');
        }
        else if($status == 'canceled')
        {
            $order->canceled_date = DB::raw('CURRENT_DATE');
        }
        $order->save();
        session()->flash('order_message','Order status has been updated successfully!');
    }
    
    public function render()
    {
        $orders = DB::table('products')->join('order_items','products.id',"=",'order_items.product_id')
        ->where('products.seller_id',Auth::user()->id)
        ->paginate(12);
    return view('livewire.seller.seller-order-component',['orders'=>$orders])->layout('layouts.base');
    }
}