<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ShowAllUsersComponent extends Component
{
    use WithPagination;
    public $searchTerm;

    public function deleteUser($user_id)
    {
        $user = User::find($user_id);
        $user->delete();
        session()->flash('update_message','user has been deleted successfully');
    }

    public function updateUtype($user_id,$utype)
    {
        $user = User::find($user_id);
        $user->utype =$utype;
        $user->save();
        session()->flash('update_message','Utype has been updated successfully!');
    }

    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $users = User::where('name','LIKE',$search)
        ->orwhere('email','LIKE',$search)
        ->orwhere('phone','LIKE',$search)
        ->orwhere('id','LIKE',$search)
        ->orderBy('created_at','DESC')->paginate(10);
        return view('livewire.admin.show-all-users-component',['users'=>$users])->layout('layouts.dashboard');
    }
}
