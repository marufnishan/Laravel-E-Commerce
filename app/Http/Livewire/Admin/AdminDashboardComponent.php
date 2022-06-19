<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $orders = Order::orderBy('created_at','DESC')->get()->take(10);
        $totalOrder = Order::count();
        $totalProduct = Product::count();
        $totalUser = User::where('utype','USR')->count();
        $totalSeller = User::where('utype','VNDR')->count();
        $totalSales = Order::where('status','delivered')->count();
        $pendingorder = Order::where('status','Ordered')->count();
        $canceledOrder = Order::where('status','canceled')->count();
        $totalRevenue = Order::where('status','delivered')->sum('total');
        $taxReturn = Order::where('status','delivered')->sum('tax');
        $todaySales = Order::where('status','delivered')->whereDate('created_at',Carbon::today())->count();
        $todayRevenue = Order::where('status','delivered')->whereDate('created_at',Carbon::today())->sum('total');
        $productVisits = DB::table('laravisits')->count();
        return view('livewire.admin.admin-dashboard-component',[
            'orders'=>$orders,
            'totalProduct'=>$totalProduct,
            'totalUser'=>$totalUser,
            'totalSeller'=>$totalSeller,
            'totalOrder'=>$totalOrder,
            'pendingorder'=>$pendingorder,
            'canceledOrder'=>$canceledOrder,
            'totalSales'=>$totalSales,
            'totalRevenue'=>$totalRevenue,  
            'taxReturn'=>$taxReturn,  
            'todaySales'=>$todaySales, 
            'todayRevenue'=>$todayRevenue,  
            'productVisits'=>$productVisits  
        ])->layout('layouts.base');
    }
}
