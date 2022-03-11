<div>
    <div class="container-fluid" style="background: #467f47;">
        <div class="row ">
            {{-- Sidebar Start --}}
            <div class="col-md-2" style="background: #467f47;">

                <x-sidebar />

            </div>
            {{-- Sidebar End --}}

            <div class="col-md-10" style="background: #46b974;">
                <div class="row" style="padding-top:20px">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background: linear-gradient(to right, #74ebd5, #acb6e5);">
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
                                <a href="{{route('seller.editprofile')}}" class="btn btn-info pull-right">Update
                                    Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>