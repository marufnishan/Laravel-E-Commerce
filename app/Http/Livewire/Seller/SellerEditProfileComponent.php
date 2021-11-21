<?php

namespace App\Http\Livewire\Seller;

use App\Models\Seller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class SellerEditProfileComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $phone;
    public $nid;
    public $image;
    public $address;
    public $city;
    public $province;
    public $country;
    public $zipcode;
    public $service_location;
    public $newimage;

    public function mount()
    {
        $sellerProfile = Seller::where('seller_id',Auth::user()->id)->first();
        if(!$sellerProfile)
        {
            $seller = new seller();
            $seller->seller_id = Auth::user()->id;
            $seller->save();
        }
        $seller = User::find(Auth::user()->id);
        $this->name = $seller->name;
        $this->email = $seller->email;
        $this->phone = $seller->phone;
        $this->nid = $seller->seller->nid;
        $this->image = $seller->seller->image;
        $this->address = $seller->seller->address;
        $this->city = $seller->seller->city;
        $this->province = $seller->seller->province;
        $this->country = $seller->seller->country;
        $this->zipcode = $seller->seller->zipcode;
        $this->service_location = $seller->seller->service_location;
    }

    public function updateProfile()
    {
        $sellerProfile = Seller::where('seller_id',Auth::user()->id)->first();
        if(!$sellerProfile)
        {
            $seller = new seller();
            $seller->seller_id = Auth::user()->id;
            $seller->save();
        }
        $seller = User::find(Auth::user()->id);
        $seller->name = $this->name;
        $seller->phone = $this->phone;
        $seller->save();

        if($this->newimage)
        {
            if($this->image)
            {
                unlink('assets/images/profile/'.$this->image);
            }
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('profile',$imageName);
            $seller->seller->image = $imageName;
        }
        $seller->seller->nid = $this->nid;
        $seller->seller->address = $this->address;
        $seller->seller->city = $this->city;
        $seller->seller->province = $this->province;
        $seller->seller->country = $this->country;
        $seller->seller->zipcode = $this->zipcode;
        $seller->seller->service_location = $this->service_location;
        $seller->seller->save();
        session()->flash('message','Profile has been updated successfully!');
    }
    
    public function render()
    {
        return view('livewire.seller.seller-edit-profile-component')->layout('layouts.base');
    }
}
