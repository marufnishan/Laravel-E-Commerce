<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <style>
        
        #order{
            font-family: sans-serif;
            font-size: 6px;
            border-collapse: collapse;
            width: 100%
        }
        #order td,#order th{
            font-family: sans-serif;
            border: 1px solid #ddd;
            padding: 2px;
            text: center;
        }
        #order tr:nth-child(even){
            background-color: #0bfdfd;
        }

        #order th{
            text-align: left;
            background-color: rgb(20, 17, 17);
            color: bisque;
        }

        body{
            margin: 5px;
            padding: 5px;
        }
    </style>
</head>
<body>
    
    <p style="float: right;">Nishanbd.com <br/> Date :{{date('d-m-y')}}</p>
    <br/>
    <p style="font-size: 22px;font-weight:bold;">Hi {{$order->firstname}} {{$order->lastname}}</p>
    <p>Phone : {{$order->mobile}}</p>
    <p>Email : {{$order->email}}</p>
    <p>Order Date : {{$order->created_at}}</p>
    <p>Order Status : {{$order->status}}</p>
    <p>Your order has been successfully placed.</p>
    <br/>
    <table style="width: 600px; text-align:right">
        <thead>
            <tr>
                <th>Order Id</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>

        <tbody>
            @foreach($order->orderItems as $item)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$item->product->name}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>{{$item->price * $item->quantity}}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="3" style="border-top:1px solid #ccc;"></td>
                <td style="font-size: 15px;font-weight:bold;border-top:1px solid #ccc;">Subtotal : ${{$order->subtotal}}</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 15px;font-weight:bold;">Tax : ${{$order->tax}}</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 15px;font-weight:bold;">Shipping : Free Shipping</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 22px;font-weight:bold;">Total : ${{$order->total}}</td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>