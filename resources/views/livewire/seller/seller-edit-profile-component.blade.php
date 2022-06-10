<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading" style="background: linear-gradient(to right, #74ebd5, #acb6e5);">
                    Update Profile
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
                            <h3>Name : <input type="text" class="form-control" wire:model="name"></h3>
                            <p><b>Email : </b>{{$email}}</p>
                            <p><b>Phone : </b><input type="text" class="form-control" wire:model="mobile"></p>
                            @error('mobile') 
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <hr>
                            <p><b>NID : </b><input type="text" class="form-control" wire:model="nid"></p>
                            @error('nid') 
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <p><b>Address : </b><input type="text" class="form-control" wire:model="address"></p>
                            @error('address') 
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <p><b>City : </b><input type="text" class="form-control" wire:model="city"></p>
                            @error('city') 
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <p><b>Province : </b><input type="text" class="form-control" wire:model="province"></p>
                            @error('province') 
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <p><b>Country : </b><input type="text" class="form-control" wire:model="country"></p>
                            @error('country') 
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <p><b>Zip Code : </b><input type="text" class="form-control" wire:model="zipcode"></p>
                            @error('zipcode') 
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <p><b>Service Location : </b><input type="text" class="form-control" wire:model="service_location"></p>
                            @error('service_location') 
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <button type="submit" class="btn btn-info pull-right">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
