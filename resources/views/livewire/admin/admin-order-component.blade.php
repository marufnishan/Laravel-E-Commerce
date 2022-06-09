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
                        <div class="row">
                            <div class="col-md-4">
                                All Orders
                            </div>
                            <div class="col-md-4">
                                <a href="{{route('admin.allorderpdf')}}" style="margin-left: 5px;"
                                    class="btn btn-danger pull-right">Download PDF</a>
                            </div>
                            <div class="col-md-4">
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
                                        <td>${{$order->subtotal}}</td>
                                        <td>${{$order->discount}}</td>
                                        <td>${{$order->tax}}</td>
                                        <td>${{$order->total}}</td>
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
