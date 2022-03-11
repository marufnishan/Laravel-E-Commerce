<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading" style="background: linear-gradient(to right, #74ebd5, #acb6e5);">
                    Update Profile
                </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif 
                    <form wire:submit.prevent="updateProfile">
                        <div class="col-md-4">
                            @if($newimage)
                            <img src="{{$newimage->temporaryUrl()}}" width="100%" />
                            @elseif($image)
                                <img src="{{asset('assets/images/profile')}}/{{$image}}" width="100%" />
                            @else
                                <img src="{{asset('assets/images/profile/profile.png')}}" width="100%" />
                            @endif
                            <input type="file" class="form-control" wire:model="newimage">
                        </div>
                        <div class="col-md-8">
                            <h3>Name : <input type="text" class="form-control" wire:model="name"></h3>
                            <p><b>Email : </b>{{$email}}</p>
                            <p><b>Phone : </b><input type="text" class="form-control" wire:model="phone"></p>
                            <hr>
                            <p><b>NID : </b><input type="text" class="form-control" wire:model="nid"></p>
                            <p><b>Address : </b><input type="text" class="form-control" wire:model="address"></p>
                            <p><b>City : </b><input type="text" class="form-control" wire:model="city"></p>
                            <p><b>Province : </b><input type="text" class="form-control" wire:model="province"></p>
                            <p><b>Country : </b><input type="text" class="form-control" wire:model="country"></p>
                            <p><b>Zip Code : </b><input type="text" class="form-control" wire:model="zipcode"></p>
                            <p><b>Service Location : </b><input type="text" class="form-control" wire:model="service_location"></p>
                            <button type="submit" class="btn btn-info pull-right">Update</button>
                            

                        </div>
                    </form>
                    <a href="{{ route('seller.profile')}}"><button class="btn btn-danger pull-left">Cancle</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
