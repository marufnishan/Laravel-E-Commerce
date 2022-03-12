<div>
    <div>
        <div class="container" style="padding: 30px 0;">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-6">
                                 Edit Users
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('admin.show_users')}}" class="btn btn-success pull-right">All Users</a> 
                                 </div>
                            </div>
                        </div>
                            <div class="panel-body" style="margin: 10px">
                                @if(Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                 @endif
                                <form class="form-horizontal" wire:submit.prevent="updateUser">
                                    <div class="form-group">
                                            <label>User Name</label>
                                            <input type="text" placeholder="Name" class="form-control" wire:model="name"/>
                                            @error('name') 
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                            <label>Phone</label>
                                            <input type="text" placeholder="Phone" class="form-control" wire:model="phone"/>
                                            @error('phone') 
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin: 10px">
                                           <button type="submit" class="btn btn-primary">Update</button>
                                     </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

