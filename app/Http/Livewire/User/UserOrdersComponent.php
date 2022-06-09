<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class UserOrdersComponent extends Component
{
    use WithPagination;
    public $searchTerm;
    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $orders = Order::where('user_id',Auth::user()->id)
        ->where('id','LIKE',$search)
        ->orWhere('user_id',Auth::user()->id)
        ->where('firstname','LIKE',$search)
        ->orWhere('user_id',Auth::user()->id)
        ->where('lastname','LIKE',$search)
        ->orWhere('user_id',Auth::user()->id)
        ->where('status','LIKE',$search)
        ->orWhere('user_id',Auth::user()->id)
        ->where('email','LIKE',$search)
        ->orWhere('user_id',Auth::user()->id)
        ->where('mobile','LIKE',$search)
        ->paginate(12);
        return view('livewire.user.user-orders-component',['orders'=>$orders])->layout('layouts.base');
    }
}
