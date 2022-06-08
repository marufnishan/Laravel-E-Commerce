<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <style>
        #order {
            font-family: sans-serif;
            font-size: 6px;
            border-collapse: collapse;
            width: 100%
        }

        #order td,
        #order th {
            border: 1px solid #ddd;
            padding: 2px;
            text: center;
        }

        #order tr:nth-child(even) {
            background-color: #0bfdfd;
        }

        #order th {
            text-align: left;
            background-color: rgb(20, 17, 17);
            color: bisque;
        }

        body {
            font-family: sans-serif;
        }

    </style>
</head>

<body>

    <p style="float: right;">Nishanbd.com <br /> Date :{{date('d-m-y')}}</p>
    <br />
    <br />
    <br />
    <br />
    <br />
    <h1>Seller All Orders</h1>
    <br />
    <table id="order">
        <thead>
            <tr>
                <th>Orders</th>
                <th>Product Id</th>
                <th>Name</th>
                <th>OrderId</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Attribute</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $index=>$order)
            <tr>
                <td>{{$index+1}}</td>
                <td>{{$order->product_id}}</td>
                <td>{{$order->name}}</td>
                <td>{{$order->order_id }}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->price}}</td>
                <td>@foreach(unserialize($order->options) as $key => $value)
                    <p><b>{{$key}}:{{$value}}</b></p>
                    @endforeach</td>
                <td>{{$order->status}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
