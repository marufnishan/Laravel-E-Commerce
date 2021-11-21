<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Profile
                </div>
                <div class="panel-body">
                    <div class="col-md-4">
                        @if($seller->seller->image)
                            <img src="{{asset('assets/images/profile')}}/{{$seller->seller->image}}" width="100%" />
                        @else
                            <img src="{{asset('assets/images/profile/profile.png')}}" width="100%" />
                        @endif
                    </div>
                    <div class="col-md-8">
                        <h3>Name : {{$seller->name}}</h3>
                        <p><b>Email : </b>{{$seller->email}}</p>
                        <p><b>Phone : </b>{{$seller->phone}}</p>
                        <hr>
                        <p><b>NID : </b>{{$seller->seller->nid}}</p>
                        <p><b>Address : </b>{{$seller->seller->address}}</p>
                        <p><b>City : </b>{{$seller->seller->city}}</p>
                        <p><b>Province : </b>{{$seller->seller->province}}</p>
                        <p><b>Country : </b>{{$seller->seller->country}}</p>
                        <p><b>Zip Code : </b>{{$seller->seller->zipcode}}</p>
                        <p><b>Service Location : </b>{{$seller->seller->service_location}}</p>
                        <a href="{{route('seller.editprofile')}}" class="btn btn-info pull-right">Update Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
