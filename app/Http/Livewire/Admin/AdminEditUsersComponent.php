<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AdminEditUsersComponent extends Component
{
    public $name;
    public $phone;
    public $user_id;

    public function mount($user_id)
    {
        $user = User::find($user_id);
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->phone = $user->phone;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'phone' => 'required'
        ]);
    }

    public function updateUser()
    {
        $this->validate([
            'name' => 'required',
            'phone' => 'required'
        ]);

        $user = User::find($this->user_id);
        $user->id = $this->user_id;
        $user->name = $this->name;
        $user->phone = $this->phone;
        $user->save();
        session()->flash('message','User has been updated successfully!');

    }


    public function render()
    {
        return view('livewire.admin.admin-edit-users-component')->layout('layouts.base');
    }
}
