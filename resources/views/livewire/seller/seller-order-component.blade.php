<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        All Orders
                    </div>
                    <div class="panel-body">
                        {{-- @if(Session::has('order_message'))
                        <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
                        @endif --}}
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
                        {{$orders->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>