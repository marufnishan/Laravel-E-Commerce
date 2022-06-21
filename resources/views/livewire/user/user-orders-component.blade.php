
<div class="content">
    <style>
        #dashboard::-webkit-scrollbar {
  display: none;
}

#sidebar::-webkit-scrollbar {
  display: none;
}

        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
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
                            <div class="panel-heading"
                                style="background: linear-gradient(to right, #74ebd5, #acb6e5);     padding: 13px 31px;">
                        <div class="row">
                                    <div class="col-md-8">
                                        All Orders
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder="Search...."
                                            wire:model="searchTerm" />
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
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
                                                <th>Action</th>
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
                                                <td><a href="{{route('user.orderdetails',['order_id'=>$order->id])}}"
                                                        class="btn btn-info btn-sm">Details</a></td>
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
