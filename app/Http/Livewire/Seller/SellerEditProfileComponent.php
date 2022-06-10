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
    public $mobile;
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
        $this->mobile = $seller->phone;
        $this->nid = $seller->seller->nid;
        $this->image = $seller->seller->image;
        $this->address = $seller->seller->address;
        $this->city = $seller->seller->city;
        $this->province = $seller->seller->province;
        $this->country = $seller->seller->country;
        $this->zipcode = $seller->seller->zipcode;
        $this->service_location = $seller->seller->service_location;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'nid' => 'required',
            'address' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'zipcode' => 'required',
            'service_location' => 'required'
        ]);
    }

    public function updateProfile()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'nid' => 'required',
            'address' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'zipcode' => 'required',
            'service_location' => 'required'
        ]);

        $sellerProfile = Seller::where('seller_id',Auth::user()->id)->first();
        if(!$sellerProfile)
        {
            $seller = new seller();
            $seller->seller_id = Auth::user()->id;
            $seller->save();
        }
        $seller = User::find(Auth::user()->id);
        $seller->name = $this->name;
        $seller->phone = $this->mobile;
        $seller->save();

        if($this->newimage)
        {
            if($this->image)
            {
                unlink('assets/images/sellers/'.$this->image);
            }
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('sellers',$imageName);
            $seller->seller->image = $imageName;
        }
        $seller->seller->nid = $this->nid;
        $seller->seller->mobile = $this->mobile;
        $seller->seller->address = $this->address;
        $seller->seller->city = $this->city;
        $seller->seller->province = $this->province;
        $seller->seller->country = $this->country;
        $seller->seller->zipcode = $this->zipcode;
        $seller->seller->service_location = $this->service_location;
        $seller->seller->save();
        return redirect()->route('seller.profile')->with('update_message','Your Profile has been updated successfully!');
    }
    
    public function render()
    {
        return view('livewire.seller.seller-edit-profile-component')->layout('layouts.base');
    }
}
