<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminOrderDetailsComponent extends Component
{
    public $order_id;

    public function OrderDetailsPDF($order_id){
        $order = Order::find($order_id);
        $pdf = PDF::loadView('adminOrderDetailspdfgenerate',[
            'order' => $order
        ])->setPaper('A4');
        return $pdf->download('invoice.pdf');
        
    }
    public function mount($order_id)
    {
        $this->$order_id = $order_id;
    }

    
    public function render()
    {
        $order = Order::find($this->order_id);
        return view('livewire.admin.admin-order-details-component',['order'=>$order])->layout('layouts.base');
    }
}
