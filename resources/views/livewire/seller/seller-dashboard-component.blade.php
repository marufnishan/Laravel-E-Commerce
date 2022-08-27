<div class="content">
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
                <div class="col-md-12" id="dashboard" style="background:#46B974;height:92vh; overflow-y: scroll; ">
                    <div class="row" style="padding-top:20px">
                        <div class="col-md-3 col-sm-6 ">
                            <div class="icon-stat">
                                <div class="row">
                                    <div class="col-xs-8 text-left ">
                                        <span class="icon-stat-label">Total Products</span>
                                        <span class="icon-stat-value">{{$totalProduct}}</span>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
                                    </div>
                                </div>
                                <div class="icon-stat-footer">
                                    <i class="fa fa-clock-o"></i> Updated Now
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="icon-stat">
                                <div class="row">
                                    <div class="col-xs-8 text-left">
                                        <span class="icon-stat-label">Total Revenue</span>
                                        <span class="icon-stat-value">৳{{$totalSale}}</span>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <i class="fa fa-dollar icon-stat-visual bg-primary"></i>
                                    </div>
                                </div>
                                <div class="icon-stat-footer">
                                    <i class="fa fa-clock-o"></i> Updated Now
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="icon-stat">
                                <div class="row">
                                    <div class="col-xs-8 text-left">
                                        <span class="icon-stat-label">Today's Revenue</span>
                                        <span class="icon-stat-value">৳{{$todaysSale}}</span>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <i class="fa fa-dollar icon-stat-visual bg-primary"></i>
                                    </div>
                                </div>
                                <div class="icon-stat-footer">
                                    <i class="fa fa-clock-o"></i> Updated Now
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="icon-stat">
                                <div class="row">
                                    <div class="col-xs-8 text-left">
                                        <span class="icon-stat-label">Total Orders</span>
                                        <span class="icon-stat-value">{{$totalOrders}}</span>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
                                    </div>
                                </div>
                                <div class="icon-stat-footer">
                                    <i class="fa fa-clock-o"></i> Updated Now
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="icon-stat">
                                <div class="row">
                                    <div class="col-xs-8 text-left">
                                        <span class="icon-stat-label">Today's Orders</span>
                                        <span class="icon-stat-value">{{$todayOrders}}</span>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
                                    </div>
                                </div>
                                <div class="icon-stat-footer">
                                    <i class="fa fa-clock-o"></i> Updated Now
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="icon-stat">
                                <div class="row">
                                    <div class="col-xs-8 text-left">
                                        <span class="icon-stat-label">Delivered Orders</span>
                                        <span class="icon-stat-value">{{$deliveredOrders}}</span>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
                                    </div>
                                </div>
                                <div class="icon-stat-footer">
                                    <i class="fa fa-clock-o"></i> Updated Now
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="icon-stat">
                                <div class="row">
                                    <div class="col-xs-8 text-left">
                                        <span class="icon-stat-label">Pending Orders</span>
                                        <span class="icon-stat-value">{{$pendingOrders}}</span>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
                                    </div>
                                </div>
                                <div class="icon-stat-footer">
                                    <i class="fa fa-clock-o"></i> Updated Now
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="icon-stat">
                                <div class="row">
                                    <div class="col-xs-8 text-left">
                                        <span class="icon-stat-label">Return Orders</span>
                                        <span class="icon-stat-value">{{$returnOrders}}</span>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
                                    </div>
                                </div>
                                <div class="icon-stat-footer">
                                    <i class="fa fa-clock-o"></i> Updated Now
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="background: #46b974">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading"
                                    style="background: linear-gradient(to right, #74ebd5, #acb6e5);">
                                    Latest Order
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
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
                                                            <button
                                                                class="btn btn-success btn-sm dropdown-toggle pull-right"
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
