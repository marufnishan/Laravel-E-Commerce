<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class OrderBarChartComponent extends Component
{
    public function render()
    {
        $orderData = Order::select(DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('count');

                    $months = Order::select(DB::raw("Month(created_at) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('count');
                    $datas=array(0,0,0,0,0,0,0,0,0,0,0,0);
                    foreach($months as $index =>$month)
                    {
                        $datas[$month] = $orderData[$index];
                    }

    return view('livewire.order-bar-chart-component',['datas'=>$datas]);
    }
}
