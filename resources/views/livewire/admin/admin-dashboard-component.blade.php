<div class="content">
    <style>
        .content {
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .icon-stat {
            display: block;
            overflow: hidden;
            position: relative;
            padding: 15px;
            margin-bottom: 1em;
            background-color: #fff;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .icon-stat-label {
            display: block;
            color: #999;
            font-size: 13px;
        }

        .icon-stat-value {
            display: block;
            font-size: 28px;
            font-weight: 600;
        }

        .icon-stat-visual {
            position: relative;
            top: 22px;
            display: inline-block;
            width: 32px;
            height: 32px;
            border-radius: 4px;
            text-align: center;
            font-size: 16px;
            line-height: 30px;
        }

        .bg-primary {
            color: #fff;
            background: #d74b4b;
        }

        .bg-secondary {
            color: #fff;
            background: #6685a4;
        }

        .icon-stat-footer {
            padding: 10px 0 0;
            margin-top: 10px;
            color: #aaa;
            font-size: 12px;
            border-top: 1px solid #eee;
        }

    </style>


    <div class="container-fluid" style="background: black;">
        <div class="row " >
            {{-- Sidebar Start --}}
            <div class="col-md-2" style="background: black">
                <div  id="sidebar-wrapper">
                    <div class="list-group  my-3 mt-5">
                        <a href="#" class="list-group-item  second-text active" style="margin-top:20px"></i>Dashboard</a>
                        <a href="{{ route('admin.categories')}}"
                            class="list-group-item  second-text fw-bold" style="background: black;border:none;color:white;margin:5px;font-weight: bold;font-size: 2rem;"></i>Categories</a>
                        <a href="{{ route('admin.attributes')}}"
                            class="list-group-item  second-text fw-bold" style="background: black;border:none;color:white;margin:5px;font-weight: bold;font-size: 2rem;"></i>Attributes</a>
                        <a href="{{ route('admin.products')}}"
                            class="list-group-item  second-text fw-bold" style="background: black;border:none;color:white;margin:5px;font-weight: bold;font-size: 2rem;"></i>All Products</a>
                        <a href="{{ route('admin.homeslider')}}"
                            class="list-group-item  second-text fw-bold" style="background: black;border:none;color:white;margin:5px;font-weight: bold;font-size: 2rem;"></i>Manage Home Slider</a>
                        <a href="{{ route('admin.homecategories')}}"
                            class="list-group-item  second-text fw-bold" style="background: black;border:none;color:white;margin:5px;font-weight: bold;font-size: 2rem;"></i>Manage Home Categories</a>
                        <a href="{{ route('admin.sale')}}"
                            class="list-group-item  second-text fw-bold" style="background: black;border:none;color:white;margin:5px;font-weight: bold;font-size: 2rem;"></i>Sale Setting</a>
                        <a href="{{ route('admin.coupons')}}"
                            class="list-group-item  second-text fw-bold" style="background: black;border:none;color:white;margin:5px;font-weight: bold;font-size: 2rem;"></i>All Coupon</a>
                        <a href="{{ route('admin.orders')}}"
                            class="list-group-item  second-text fw-bold" style="background: black;border:none;color:white;margin:5px;font-weight: bold;font-size: 2rem;"></i>All Orders</a>
                        <a href="{{ route('admin.contact')}}"
                            class="list-group-item  second-text fw-bold" style="background: black;border:none;color:white;margin:5px;font-weight: bold;font-size: 2rem;"></i>Contact Messages</a>
                        <a href="{{ route('admin.settings')}}"
                            class="list-group-item  second-text fw-bold" style="background: black;border:none;color:white;margin:5px;font-weight: bold;font-size: 2rem;"></i>Settings</a>
                    </div>
                </div>
            </div>
            {{-- Sidebar End --}}
            <div class="col-md-10">
                <div class="row" style="background: #0083AB;padding-top:20px">
                    <div class="col-md-3 col-sm-6 ">
                        <div class="icon-stat">
                            <div class="row">
                                <div class="col-xs-8 text-left ">
                                    <span class="icon-stat-label">Total Revenue</span>
                                    <span class="icon-stat-value">${{$totalRevenue}}</span>
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
                                    <span class="icon-stat-label">Today Revenue</span>
                                    <span class="icon-stat-value">${{$todayRevenue}}</span>
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
                </div>
                <div class="row">
                    <div class="col-md-12" style="background: #0083AB">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Latest Order
                            </div>
                            <div class="panel-body">
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
