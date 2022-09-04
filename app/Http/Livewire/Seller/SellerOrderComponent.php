<?php

namespace App\Http\Livewire\Seller;

use App\Models\OrderItem;
use App\Models\Product;
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

            $product = Product::find($order->product_id);
            if($product->quantity <= 0 )
            {
                $product->stock_status = 'outofstock';
            }else{
                if($product->quantity >= $order->quantity){
                    $product->quantity = $product->quantity-$order->quantity;
                }else{
                    return session()->flash('order_message','Out of stock quantity!');  
                }
                      
            }
            $product->save();
            

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
        $search = '%' . $this->searchTerm . '%';
        $orders = DB::table('products')->join('order_items','products.id',"=",'order_items.product_id')
        ->where('products.seller_id',Auth::user()->id)
        ->where('status','LIKE',$search)
        ->orWhere('products.seller_id',Auth::user()->id)
        ->where('order_items.order_id','LIKE',$search)
        ->orWhere('products.seller_id',Auth::user()->id)
        ->where('products.name','LIKE',$search)
        ->orWhere('products.seller_id',Auth::user()->id)
        ->where('products.id','LIKE',$search)
        ->orderBy('order_items.created_at','DESC')->paginate(10);
    return view('livewire.seller.seller-order-component',['orders'=>$orders])->layout('layouts.dashboard');
    }
}