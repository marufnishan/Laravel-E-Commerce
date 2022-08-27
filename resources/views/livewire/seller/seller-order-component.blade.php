<div>
    <div class="container-fluid">
        <div class="row ">
            <x-sidebar />
            <div id="main" class="smain">
                <div class="col-md-12" style="margin: 0; padding:0; background:black ">
                    <div class="col-md-6"><button class="openbtn" onclick="openNav()">☰ DASHBOARD</button></div>
                    <div class="col-md-6" id="dhome">
                        <a href="/">
                            <button class="openbtn pull-right">
                                <img src="{{ asset('assets/images/logo-top-1.png') }}"
                                    style="height:32px; width:32px">HOME
                            </button>
                        </a>
                    </div>
                </div>

                <div class="col-md-12" id="dashboard" style="height:80vh; overflow-y: scroll; padding:0px; margin:0; ">
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading"
                                style="background: linear-gradient(to right, #74ebd5, #acb6e5);     padding: 13px 31px;">
                                <div class="row">
                                    <div class="col-md-4">
                                        All Orders
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{route('seller.allorderpdf')}}" style="margin-left: 5px; margin-bottom: 10px ;"
                                            class="btn btn-danger pull-right">Download PDF</a>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder="Search...."
                                            wire:model="searchTerm" />
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Orders</th>
                                            <th>Product Id</th>
                                            <th>Images</th>
                                            <th>Name</th>
                                            <th>OrderId</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Attribute</th>
                                            <th>Status</th>
                                            <th colspan="2" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i= 1?>
                                        @foreach($orders as $order)

                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$order->product_id}}</td>
                                            <td><img src="{{asset('assets/images/products')}}/{{$order->image}}"
                                                    width="60" /></td>
                                            <td>{{$order->name}}</td>
                                            <td>{{$order->order_id }}</td>
                                            <td>{{$order->quantity}}</td>
                                            <td>৳{{$order->price}}</td>
                                            <td>@foreach(unserialize($order->options) as $key => $value)
                                                <p><b>{{$key}}:{{$value}}</b></p>
                                                @endforeach</td>
                                            <td>{{$order->status}}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-success btn-sm dropdown-toggle pull-right"
                                                        type="button" data-toggle="dropdown">Status <span
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
