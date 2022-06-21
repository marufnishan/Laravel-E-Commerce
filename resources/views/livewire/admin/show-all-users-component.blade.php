<div class="content">
    <style>
        .content {
            padding-top: 40px;
            padding-bottom: 40px;
        }

        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }

        .sidebar {
            height: 80vh;
        }

        @media screen and (max-height: 700px) {
            .sidebar {
            height: 80vh !important;
        }
        }


    </style>
    <div class="container-fluid" style="background: #FFFFFF;height: 80vh;">
        <div class="row ">
            <div id="main">
                <div class="col-md-12" style="margin: 0; padding:0; background:black "><button class="openbtn"
                        onclick="openNav()">☰ DASHBOARD</button></div>
                <x-sidebar />
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: linear-gradient(to right, #74ebd5, #acb6e5);">
                        <div class="row">
                            <div class="col-md-8" style="padding-top: 10px ;">
                                All Users
                            </div>
                            <div class="col-md-4" style="padding-top: 10px">
                                <input type="text" class="form-control" placeholder="Search...."
                                    wire:model="searchTerm" />
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if(Session::has('update_message'))
                            <div class="alert alert-success" role="alert">{{Session::get('update_message')}}</div>
                            @endif
                            <table class="table table-striped">
                                <thead>
                                    <tr style="background:#009688;color: white;">
                                        <th>User Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>phone</th>
                                        <th colspan="2" class="text-center">Utype</th>
                                        <th>Created_at</th>
                                        <th>Updated_at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td colspan="2" class="text-center">
                                            <div class="dropdown">
                                                <button class="btn btn-sm dropdown-toggle" type="button"
                                                    data-toggle="dropdown"> {{$user->utype}} <span
                                                        class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#"
                                                            wire:click.prevent="updateUtype({{$user->id}},'USR')">User</a>
                                                    </li>
                                                    <li><a href="#"
                                                            wire:click.prevent="updateUtype({{$user->id}},'VNDR')">Seller</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>{{$user->created_at}}</td>
                                        <td>{{$user->updated_at}}</td>
                                        <td><a href="{{route('admin.edit_user',['user_id'=>$user->id])}}"><i
                                                    class="fa fa-edit fa-2x"></i></a>
                                            <a href="#"
                                                onclick="confirm('Are you sure,You want to delete this user ?') || event.stopImmediatePropagation()"
                                                wire:click.prevent="deleteUser({{$user->id}})"
                                                style="margin-left:10px;"><i
                                                    class="fa fa-times fa-2x text-danger"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$users->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
