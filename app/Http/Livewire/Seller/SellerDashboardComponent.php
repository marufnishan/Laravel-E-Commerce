<?php

namespace App\Http\Livewire\Seller;

use App\Models\OrderItem;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SellerDashboardComponent extends Component
{
    public $totalSale = 0;
    public $todaysSale = 0;
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
        ->whereDate('order_items.created_at',Carbon::today())
        ->get()->take(10);

        $totalProduct = Product::where('seller_id', Auth::user()->id)->sum('quantity');

        $totalSales = DB::table('products')->join('order_items','products.id',"=",'order_items.product_id')
        ->where('products.seller_id',Auth::user()->id)
        ->get();

        foreach ($totalSales as $totalSale) {
            if($totalSale->status == "delivered"){
            $this->totalSale += ($totalSale->price * $totalSale->quantity) ;
            }
          }

        $todaysSales = DB::table('products')->join('order_items','products.id',"=",'order_items.product_id')
        ->where('products.seller_id',Auth::user()->id)
        ->whereDate('order_items.delivered_date',Carbon::today())->get();

        foreach ($todaysSales as $todaysSale) {
            if($todaysSale->status == "delivered"){
            $this->todaysSale += ($todaysSale->price * $todaysSale->quantity) ;
            }
          }
        
        $totalOrders = DB::table('products')->join('order_items','products.id',"=",'order_items.product_id')
        ->where('products.seller_id',Auth::user()->id)
        ->get()->sum('quantity');

        $todayOrders = DB::table('products')->join('order_items','products.id',"=",'order_items.product_id')
        ->where('products.seller_id',Auth::user()->id)
        ->whereDate('order_items.created_at',Carbon::today())->count();

        $deliveredOrders = DB::table('products')->join('order_items','products.id',"=",'order_items.product_id')
        ->where('products.seller_id',Auth::user()->id)
        ->get()->where('status','delivered')->count();

        $pendingOrders = DB::table('products')->join('order_items','products.id',"=",'order_items.product_id')
        ->where('products.seller_id',Auth::user()->id)
        ->get()->where('status','ordered')->count();

        $returnOrders = DB::table('products')->join('order_items','products.id',"=",'order_items.product_id')
        ->where('products.seller_id',Auth::user()->id)
        ->get()->where('status','canceled')->count();

        return view('livewire.seller.seller-dashboard-component',[
            'orders'=> $orders,
            'totalProduct'=>$totalProduct,
            'totalSale'=>$this->totalSale,  
            'totalOrders'=>$totalOrders, 
            'todayOrders'=>$todayOrders,
            'todaysSale'=>$this->todaysSale,
            'deliveredOrders'=> $deliveredOrders,
            'pendingOrders'=> $pendingOrders,
            'returnOrders'=> $returnOrders,
        ])->layout('layouts.dashboard');
    }
}
