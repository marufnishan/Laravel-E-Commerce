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

    </style>
    <div class="container-fluid" style="background: #FFFFFF;">
        <div class="row ">
            {{-- Sidebar Start --}}
            <div class="col-md-2" style="background: #467f47;">

                <x-sidebar />

            </div>
            {{-- Sidebar End --}}

            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: linear-gradient(to right, #74ebd5, #acb6e5);">
                        All Sellers
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            {{-- @if(Session::has('order_message'))
                            <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
                            @endif --}}
                            <table class="table table-striped">
                                <thead>
                                    <tr style="background:#009688;color: white;">
                                        <th>SellerId</th>
                                        <th>Image</th>
                                        <th>Mobile</th>
                                        <th>NID</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Province</th>
                                        <th>Country</th>
                                        <th>Zipcode</th>
                                        <th>Service_location</th>
                                        <th>Created_at</th>
                                        <th colspan="2" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sellers as $seller)
                                    <tr>
                                        <td>{{$seller->seller_id}}</td>
                                        <td><img src="{{asset('assets/images/profile')}}/{{$seller->image}}" width="60" /></td>
                                        <td>{{$seller->mobile}}</td>
                                        <td>{{$seller->nid}}</td>
                                        <td>{{$seller->address}}</td>
                                        <td>{{$seller->city}}</td>
                                        <td>{{$seller->province}}</td>
                                        <td>{{$seller->country}}</td>
                                        <td>{{$seller->zipcode}}</td>
                                        <td>{{$seller->service_location}}</td>
                                        <td>{{$seller->created_at}}</td>
                                        {{-- <td>
                                            <div class="dropdown">
                                                <button class="btn btn-success btn-sm dropdown-toggle" type="button"
                                                    data-toggle="dropdown">Status <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#"
                                                            wire:click.prevent="updateOrderStatus({{$order->id}},'delivered')">Delivered</a>
                                                    </li>
                                                    <li><a href="#"
                                                            wire:click.prevent="updateOrderStatus({{$order->id}},'canceled')">Canceled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {{$orders->links()}} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
