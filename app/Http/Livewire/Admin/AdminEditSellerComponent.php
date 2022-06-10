<?php

namespace App\Http\Livewire\Admin;

use App\Models\Seller;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditSellerComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $image;
    public $mobile;
    public $nid;
    public $address;
    public $city;
    public $province;
    public $country;
    public $zipcode;
    public $service_location;
    public $seller_id;


    public $newimage;



    public function mount($seller_id)
    {
        $seller = User::where('id',$seller_id)->first();
        $this->seller_id = $seller->seller->seller_id;
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
            'seller_id' => 'required',
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
            'seller_id' => 'required',
            'mobile' => 'required',
            'nid' => 'required',
            'address' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'zipcode' => 'required',
            'service_location' => 'required'
        ]);

        $seller = Seller::where('seller_id',$this->seller_id)->first();
        $seller->seller_id = $this->seller_id;
        if($this->newimage)
        {
            if($this->image)
            {
                unlink('assets/images/sellers/'.$this->image);
            }
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('sellers',$imageName);
            $seller->image = $imageName;
        }
        $seller->mobile = $this->mobile;
        $seller->nid = $this->nid;
        $seller->address = $this->address;
        $seller->city = $this->city;
        $seller->province = $this->province;
        $seller->country = $this->country;
        $seller->zipcode = $this->zipcode;
        $seller->service_location = $this->service_location;
        $seller->save();
        return redirect()->route('admin.show_sellers')->with('update_message','Seller Profile has been updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-seller-component')->layout('layouts.base');
    }
}
