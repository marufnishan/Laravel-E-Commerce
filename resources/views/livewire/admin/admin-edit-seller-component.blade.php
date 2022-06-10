<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update Seller Profile
                </div>
                <div class="panel-body">
                <form wire:submit.prevent="updateProfile">
                    <div class="col-md-4">
                        @if($newimage)
                        <img src="{{$newimage->temporaryUrl()}}" width="100%" />
                        @elseif($image)
                        <img src="{{asset('assets/images/sellers')}}/{{$image}}" width="100%" />
                        @else
                        <img src="{{asset('assets/images/profile/profile.png')}}" width="100%" />
                        @endif
                        <input type="file" class="form-control" wire:model="newimage">
                    </div>
                    <div class="col-md-8">
                        <label>Phone</label>
                        <input type="text" placeholder="Phone" class="form-control" wire:model="mobile" />
                        @error('mobile') 
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <label>Nid No</label>
                        <input type="text" placeholder="Nid" class="form-control" wire:model="nid" />
                        @error('nid') 
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <label>Address</label>
                        <input type="text" placeholder="Address" class="form-control" wire:model="address" />
                        @error('address') 
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <label>City</label>
                        <input type="text" placeholder="City" class="form-control" wire:model="city" />
                        @error('city') 
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <label>Province</label>
                        <input type="text" placeholder="Province" class="form-control" wire:model="province" />
                        @error('province') 
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <label>Country</label>
                        <input type="text" placeholder="Country" class="form-control" wire:model="country" />
                        @error('country') 
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <label>Zipcode</label>
                        <input type="text" placeholder="Zipcode" class="form-control" wire:model="zipcode" />
                        @error('zipcode') 
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <label>Service Location</label>
                        <input type="text" placeholder="Service Location" class="form-control"
                            wire:model="service_location" />
                            @error('service_location') 
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <button type="submit" class="btn btn-info pull-right" style="margin: 10px">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
