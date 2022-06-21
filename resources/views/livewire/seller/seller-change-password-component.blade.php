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
                <div class="panel panel-default">
                    <div class="panel-heading"style="background: linear-gradient(to right, #74ebd5, #acb6e5); padding: 13px 31px;">
                        Change Password
                    </div>
                    <div class="panel-body">
                        @if(Session::has('password_success'))
                        <div class="alert alert-success" role="alert">{{Session::get('password_success')}}</div>
                        @endif
                        @if(Session::has('password_error'))
                        <div class="alert alert-danger" role="alert">{{Session::get('password_error')}}</div>
                        @endif
                        <form class="form-horizontal"  wire:submit.prevent="changePassword">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Current Password</label>
                                <div class="col-md-4">
                                    <input type="password" placeholder="Current Password" class="form-control input-md" name="current_password" wire:model="current_password"/>
                                    @error('current_password')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">New Password</label>
                                <div class="col-md-4">
                                    <input type="password" placeholder="New Password" class="form-control input-md" name="password" wire:model="password" />
                                    @error('password')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-4">
                                    <input type="password" placeholder="Confirm Password" class="form-control input-md" name="password_confirmation" wire:model="password_confirmation" />
                                    @error('password_confirmation')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                </div>
                            </div>                          

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                   <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
