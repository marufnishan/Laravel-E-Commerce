<?php

namespace App\Http\Livewire;

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

                    $months = User::select(DB::raw("Month(created_at) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('count');
                    $datas=array(0,0,0,0,0,0,0,0,0,0,0,0);
                    foreach($months as $index =>$month)
                    {
                        $datas[$month] = $userData[$index];
                    }

    return view('livewire.chart-component',['datas'=>$datas]);    
            
    }
}
