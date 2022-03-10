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
                                    <th>OrderId</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Attribute</th>
                                    <th colspan="2" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i= 1?>
                                @foreach($orders as $order)

                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$order->product_id}}</td>
                                        <td>{{$order->order_id }}</td>
                                        <td>{{$order->quantity}}</td>
                                        <td>{{$order->price}}</td>
                                        <td>{{$order->options}}</td>
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