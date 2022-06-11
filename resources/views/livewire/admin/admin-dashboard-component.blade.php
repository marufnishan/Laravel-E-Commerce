
<div class="content">
    <style>
        #dashboard::-webkit-scrollbar {
  display: none;
}

#sidebar::-webkit-scrollbar {
  display: none;
}
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

    <div class="container-fluid" style="background: #009688;">
        <div class="row ">
            {{-- Sidebar Start --}}
            <div class="col-md-2" id="sidebar" style="background: #009688;height:100vh; overflow-y: scroll;">

                <x-sidebar />

            </div>
            {{-- Sidebar End --}}

            <div class="col-md-10" id="dashboard" style="height:100vh; overflow-y: scroll;">
                <div class="row" style="background: #46b974;padding-top:20px">
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
                <div class="row" style="background: #46b974">
                    <div class="col-md-12" >
                        <div class="panel panel-default">
                            <div class="panel-heading"  style="background: linear-gradient(to right, #74ebd5, #acb6e5);">
                                Latest Order
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead >
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
                                                        class="btn btn-success btn-sm">Details</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">@livewire('chart-component')</div>
                    <div class="col-md-6">@livewire('order-bar-chart-component')</div>
                </div>
            </div>
        </div>
    </div>

</div>

