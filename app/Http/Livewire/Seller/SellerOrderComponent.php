<?php

namespace App\Http\Livewire\Seller;

use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use Barryvdh\DomPDF\Facade\Pdf;

class SellerOrderComponent extends Component
{
    use WithPagination;
    public $searchTerm;

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

    public function AllOrderPDF(){
        $orders =  DB::table('products')->join('order_items','products.id',"=",'order_items.product_id')
        ->where('products.seller_id',Auth::user()->id)->get();
        $pdf = PDF::loadView('Pdf.sellerAllOrderpdfgenerate',[
            'orders' => $orders
        ])->setPaper('A4');
        return $pdf->download('allorders.pdf');
        
    }
    
    public function render()
    {
        $orders = DB::table('products')->join('order_items','products.id',"=",'order_items.product_id')
        ->where('products.seller_id',Auth::user()->id)
        ->where('order_id','LIKE',$this->searchTerm)
        ->orderBy('order_items.created_at','DESC')->paginate(12);
    return view('livewire.seller.seller-order-component',['orders'=>$orders])->layout('layouts.base');
    }
}