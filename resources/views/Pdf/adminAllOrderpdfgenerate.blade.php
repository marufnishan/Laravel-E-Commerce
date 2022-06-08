<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <style>
        #order{
            font-family: sans-serif;
            font-size: 6px;
            border-collapse: collapse;
            width: 100%
        }
        #order td,#order th{
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
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    
    <p style="float: right;">Nishanbd.com <br/> Date :{{date('d-m-y')}}</p>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <h1>All Orders</h1>
    <br/>
    <table id="order">
        <thead>
            <tr>
                <th>No.</th>
                <th>OrderId</th>
                <th>Subtotal</th>
                <th>Discount</th>
                <th>Tax</th>
                <th>Total</th>
                <th>User Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Zipcode</th>
                <th>Order Date</th>
                <th>Order Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $index=>$order)
            <tr>
                <td>{{$index+1}}</td>
                <td>{{$order->id }}</td>
                <td>{{$order->subtotal}}</td>
                <td>{{$order->discount}}</td>
                <td>{{$order->tax}}</td>
                <td>{{$order->total}}</td>
                <td>{{$order->firstname}} {{$order->lastname}}</td>
                <td>{{$order->mobile}}</td>
                <td>{{$order->email}}</td>
                <td>{{$order->zipcode}}</td>
                <td>{{$order->created_at}}</td>
                <td>{{$order->status}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>