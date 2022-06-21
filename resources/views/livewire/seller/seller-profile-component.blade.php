<div>
<style>
        #dashboard::-webkit-scrollbar {
  display: none;
}

#sidebar::-webkit-scrollbar {
  display: none;

}   
.sidebar {
            height: 82vh;
        }
@media screen and (max-height: 700px) {
            .sidebar {
            height: 82vh !important;
        }
    }
    </style>

    <div class="container-fluid">
        <div class="row ">
            <div id="main">
                <div class="col-md-12" style="margin: 0; padding:0; background:black "><button class="openbtn"
                        onclick="openNav()">☰ DASHBOARD</button></div>
                <x-sidebar />

            <div class="col-md-12" id="dashboard" style="height:80vh; overflow-y: scroll; padding:0px; margin:0; ">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background: linear-gradient(to right, #74ebd5, #acb6e5);     padding: 13px 31px;">
                            Profile
                        </div>
                        <div class="panel-body">

                            @if(Session::has('update_message'))
                            <div class="alert alert-success" role="alert">{{Session::get('update_message')}}</div>
                            @endif
                            <div class="col-md-4">
                                @if($seller->seller->image)
                                <img src="{{asset('assets/images/sellers')}}/{{$seller->seller->image}}" width="100%" />
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
