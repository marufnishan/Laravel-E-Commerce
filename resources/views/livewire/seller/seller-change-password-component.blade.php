<div>
<style>
        #dashboard::-webkit-scrollbar {
  display: none;
}

#sidebar::-webkit-scrollbar {
  display: none;
}
</style>

<div class="container-fluid" style="background: #FFFFFF;">
        <div class="row">
        {{-- Sidebar Start --}}
        <div class="col-md-2" id="sidebar" style="background: #009688;height:80vh; overflow-y: scroll;">


                <x-sidebar />
                
            </div>
            {{-- Sidebar End --}}
            <div class="col-md-10" id="dashboard" style="background: #FFFF;height:80vh; overflow-y: scroll; margin-top:20px ">
                <div class="panel panel-default">
                    <div class="panel-heading"style="background: linear-gradient(to right, #74ebd5, #acb6e5);">
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
