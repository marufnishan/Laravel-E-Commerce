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
                                <div class="table-responsive">
                                    <div class="col-md-4">
                                        @if($user->profile->image)
                                        <img src="{{asset('assets/images/profile')}}/{{$user->profile->image}}"
                                            width="100%" />
                                        @else
                                        <img src="{{asset('assets/images/profile/profile.png')}}" width="100%" />
                                        @endif
                                    </div>
                                    <div class="col-md-8">
                                        <h3>Name : {{$user->name}}</h3>
                                        <p><b>Email : </b>{{$user->email}}</p>
                                        <p><b>Phone : </b>{{$user->profile->mobile}}</p>
                                        <hr>
                                        <p><b>Address : </b>{{$user->profile->line1}}</p>
                                        <p><b>Street-House No : </b>{{$user->profile->line2}}</p>
                                        <p><b>City : </b>{{$user->profile->city}}</p>
                                        <p><b>Province : </b>{{$user->profile->province}}</p>
                                        <p><b>Country : </b>{{$user->profile->country}}</p>
                                        <p><b>Zip Code : </b>{{$user->profile->zipcode}}</p>
                                        <a href="{{route('user.editprofile')}}" class="btn btn-info pull-right">Update
                                            Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>