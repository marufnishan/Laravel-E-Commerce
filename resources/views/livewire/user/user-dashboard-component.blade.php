
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
                
                <div class="col-md-12" id="dashboard" style="background:#46B974;height:90vh; overflow-y: scroll; ">
                    <div class="row" style="padding-top:20px">
                    <div class="col-md-3 col-sm-6">
                        <div class="icon-stat">
                            <div class="row">
                                <div class="col-xs-8 text-left">
                                    <span class="icon-stat-label">Total Cost</span>
                                    <span class="icon-stat-value">৳{{$totalCost}}</span>
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
                                    <span class="icon-stat-label">Total Purchare</span>
                                    <span class="icon-stat-value">{{$totalPurchase}}</span>
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
                                    <span class="icon-stat-label">Total Delivered</span>
                                    <span class="icon-stat-value">{{$totalDeliverd}}</span>
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
                                    <span class="icon-stat-label">Total Canceled</span>
                                    <span class="icon-stat-value">{{$totalCanceled}}</span>
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

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background: linear-gradient(to right, #74ebd5, #acb6e5);">
                            Latest Order
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
                                            <td><a href="{{route('user.orderdetails',['order_id'=>$order->id])}}"
                                                    class="btn btn-info btn-sm">Details</a></td>
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
