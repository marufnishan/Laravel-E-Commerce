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

    <div class="container-fluid" style="background: rgb(68, 67, 67);">
        <div class="row " >
            {{-- Sidebar Start --}}
            <div class="col-md-2" style="background: rgb(68, 67, 67)">

                <x-sidebar />
                
            </div>
            {{-- Sidebar End --}}
            <div class="col-md-10">
                <div class="row" style="background: #0083AB;padding-top:20px">
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
                                    <span class="icon-stat-value">${{$totalSale}}</span>
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
                                    <span class="icon-stat-value">${{$todaysSale}}</span>
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
                <div class="row">
                    <div class="col-md-12" style="background: #0083AB">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Latest Order
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr><th>Orders</th>
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
                                                    <td><img src="{{asset('assets/images/products')}}/{{$order->image}}" width="60" /></td>
                                                    <td>{{$order->name}}</td>
                                                    <td>{{$order->order_id }}</td>
                                                    <td>{{$order->quantity}}</td>
                                                    <td>{{$order->price}}</td>
                                                    <td>@foreach(unserialize($order->options) as $key => $value)
                                                        <p><b>{{$key}}:{{$value}}</b></p>
                                                    @endforeach</td>
                                                    <td>{{$order->status}}</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-success btn-sm dropdown-toggle pull-right" type="button" data-toggle="dropdown">Status <span class="caret"></span></button>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'delivered')">Delivered</a></li>
                                                                <li><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'canceled')">Canceled</a></li>
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
