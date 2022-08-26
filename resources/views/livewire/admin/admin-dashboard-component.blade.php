<div class="content">
    <div class="container-fluid">
        <div class="row ">
            <x-sidebar />
            <div id="main" class="smain">
                <div class="col-md-12" style="margin: 0; padding:0; background:black ">
                    <div class="col-md-6"><button class="openbtn"
                        onclick="openNav()">☰ DASHBOARD</button></div>
                    <div class="col-md-6" id="dhome"><a href="/">
                        <a href="/"><button class="openbtn pull-right">
                            <img src="{{ asset('assets/images/logo-top-1.png') }}"
                                style="height:32px; width:32px">HOME</button></a></div>
                    
                </div>
                <div>
                    <div class="col-md-12" id="dashboard" style="height:90vh; overflow-y: scroll;">
                        <div class="row" style="background: #46b974;padding-top:20px">
                            <div class="col-md-3 col-sm-6 ">
                                <div class="icon-stat">
                                    <div class="row">
                                        <div class="col-xs-8 text-left ">
                                            <span class="icon-stat-label">Total Revenue</span>
                                            <span class="icon-stat-value">৳{{$totalRevenue}}</span>
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
                                            <span class="icon-stat-label">Today Revenue</span>
                                            <span class="icon-stat-value">৳{{$todayRevenue}}</span>
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
                                            <span class="icon-stat-label">Tax Return</span>
                                            <span class="icon-stat-value">৳{{$taxReturn}}</span>
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
                                            <span class="icon-stat-label">Total Order</span>
                                            <span class="icon-stat-value">{{$totalOrder}}</span>
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
                                            <span class="icon-stat-label">Total Sales</span>
                                            <span class="icon-stat-value">{{$totalSales}}</span>
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
                                            <span class="icon-stat-label">Today Sales</span>
                                            <span class="icon-stat-value">{{$todaySales}}</span>
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
                                            <span class="icon-stat-label">Pending Order</span>
                                            <span class="icon-stat-value">{{$pendingorder}}</span>
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
                                            <span class="icon-stat-label">Cancel Order</span>
                                            <span class="icon-stat-value">{{$canceledOrder}}</span>
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
                                            <span class="icon-stat-label">Totel Product</span>
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
                                            <span class="icon-stat-label">Totel User</span>
                                            <span class="icon-stat-value">{{$totalUser}}</span>
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
                                            <span class="icon-stat-label">Totel Seller</span>
                                            <span class="icon-stat-value">{{$totalSeller}}</span>
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
                                            <span class="icon-stat-label">Product Visits</span>
                                            <span class="icon-stat-value">{{$productVisits}}</span>
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
                            <div class="col-md-12" style="padding-bottom:10px;">
                                <div class="col-md-6" style="margin: 0;padding:0;">@livewire('chart-component')</div>
                                <div class="col-md-6" style="margin: 0;padding:0;">
                                    @livewire('order-bar-chart-component')
                                </div>
                            </div>

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
                                                        <th class="text-center">Action</th>
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
                                                                class="btn btn-success btn-sm">Details</a></td>
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
    </div>

</div>
