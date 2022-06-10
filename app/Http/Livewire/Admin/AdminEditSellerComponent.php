<?php

namespace App\Http\Livewire\Admin;

use App\Models\Seller;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditSellerComponent extends Component
{
    use WithFileUploads;
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
        $seller = Seller::where('seller_id',$seller_id)->first();
        $this->seller_id = $seller->seller_id;
        $this->image = $seller->image;
        $this->mobile = $seller->mobile;
        $this->nid = $seller->nid;
        $this->address = $seller->address;
        $this->city = $seller->city;
        $this->province = $seller->province;
        $this->country = $seller->country;
        $this->zipcode = $seller->zipcode;
        $this->service_location = $seller->service_location;
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
