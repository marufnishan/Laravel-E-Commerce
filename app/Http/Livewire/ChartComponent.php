<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ChartComponent extends Component
{
    public function render()
    {

        $userData = User::select(DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('count');

    return view('livewire.chart-component',['userData'=>$userData]);    
            
    }
}
