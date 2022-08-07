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
        #dashboard::-webkit-scrollbar {
            display: none;
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
                <div class="col-md-12" id="dashboard" style="height:70vh; overflow-y: scroll;margin:0;padding:0">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background: linear-gradient(to right, #74ebd5, #acb6e5);">
                            <div class="row">
                                <div class="col-md-4" style="padding-top: 10px ;">
                                    All Orders
                                </div>
                                <div class="col-md-4" style="padding-top: 10px ;">
                                    <a href="{{route('admin.allorderpdf')}}" style="margin-left: 5px; margin-bottom: 10px ;"
                                        class="btn btn-danger pull-right">Download PDF</a>
                                </div>
                                <div class="col-md-4" style="padding-top: 10px ;">
                                    <input type="text" class="form-control" placeholder="Search...."
                                        wire:model="searchTerm" />
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                @if(Session::has('order_message'))
                                <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
                                @endif
                                <table class="table table-striped">
                                    <thead>
                                        <tr style="background:#009688;color: white;">
                                            <th>OrderId</th>
                                            <th>Subtotal</th>
                                            <th>Discount</th>
                                            <th>Tax</th>
                                            <th>Total</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Zipcode</th>
                                            <th>Status</th>
                                            <th>Order Date</th>
                                            <th colspan="2" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $order)
                                        <tr>
                                            <td>{{$order->id}}</td>
                                            <td>৳{{$order->subtotal}}</td>
                                            <td>৳{{$order->discount}}</td>
                                            <td>৳{{$order->tax}}</td>
                                            <td>৳{{$order->total}}</td>
                                            <td>{{$order->firstname}}</td>
                                            <td>{{$order->lastname}}</td>
                                            <td>{{$order->mobile}}</td>
                                            <td>{{$order->email}}</td>
                                            <td>{{$order->zipcode}}</td>
                                            <td>{{$order->status}}</td>
                                            <td>{{$order->created_at}}</td>
                                            <td><a href="{{route('admin.orderdetails',['order_id'=>$order->id])}}"
                                                    class="btn btn-info btn-sm">Details</a></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-success btn-sm dropdown-toggle" type="button"
                                                        data-toggle="dropdown">Status <span
                                                            class="caret"></span></button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#"
                                                                wire:click.prevent="updateOrderStatus({{$order->id}},'delivered')">Delivered</a>
                                                        </li>
                                                        <li><a href="#"
                                                                wire:click.prevent="updateOrderStatus({{$order->id}},'canceled')">Canceled</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$orders->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
