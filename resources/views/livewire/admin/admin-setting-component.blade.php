<div class="content">
    <div class="container-fluid" style="background: #FFFFFF;height: 80vh;">
        <div class="row ">
            <x-sidebar />
            <div id="main">
                <div class="col-md-12" style="margin: 0; padding:0; background:black "><button class="openbtn"
                        onclick="openNav()">☰ DASHBOARD</button></div>
                
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: linear-gradient(to right, #74ebd5, #acb6e5);">
                        Settings
                    </div>
                    <div class="panel-body" style="height:90vh; overflow-y: scroll;">
                        <div class="table-responsive">
                            @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <form class="form-horizontal" wire:submit.prevent="saveSettings">

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Email</label>
                                    <div class="col-md-4">
                                        <input type="email" placeholder="Email" class="form-control input-md"
                                            wire:model="email" />
                                        @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Phone</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Phone" class="form-control input-md"
                                            wire:model="phone" />
                                        @error('phone')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Phone2</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Phone2" class="form-control input-md"
                                            wire:model="phone2" />
                                        @error('phone2')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Address</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Address" class="form-control input-md"
                                            wire:model="address" />
                                        @error('address')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Map</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Map" class="form-control input-md"
                                            wire:model="map" />
                                        @error('map')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Twiter</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Twiter" class="form-control input-md"
                                            wire:model="twiter" />
                                        @error('twiter')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Facebook</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Facebook" class="form-control input-md"
                                            wire:model="facebook" />
                                        @error('facebook')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Pinterest</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Pinterest" class="form-control input-md"
                                            wire:model="pinterest" />
                                        @error('pinterest')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Instagram</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Instagram" class="form-control input-md"
                                            wire:model="instagram" />
                                        @error('instagram')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Youtube</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Youtube" class="form-control input-md"
                                            wire:model="youtube" />
                                        @error('youtube')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"></label>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
