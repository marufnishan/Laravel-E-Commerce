<div>
    <div class="container-fluid">
        <div class="row ">
            <x-sidebar />
            <div id="main" class="smain">
                <div class="col-md-12" style="margin: 0; padding:0; background:black ">
                    <div class="col-md-6"><button class="openbtn" onclick="openNav()">☰ DASHBOARD</button></div>
                    <div class="col-md-6" id="dhome">
                        <a href="/">
                            <button class="openbtn pull-right">
                                <img src="{{ asset('assets/images/logo-top-1.png') }}"
                                    style="height:32px; width:32px">HOME
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-md-12" id="dashboard" style="height:92vh; overflow-y: scroll; padding:0px; margin:0; ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background: linear-gradient(to right, #74ebd5, #acb6e5); padding: 13px 31px;">
                                <div class="row">
                                    <div class="col-md-4" style="padding:10px;">
                                        All Products
                                    </div>
                                    <div class="col-md-4" >
                                        <a href="{{route('seller.addproduct')}}" class="btn btn-success pull-right"style="margin-left: 5px; margin-bottom: 10px ;">Add
                                            New</a>
                                    </div>
                                    <div class="col-md-4" style="padding:10px;">
                                        <input type="text" class="form-control" placeholder="Search...."
                                            wire:model="searchTerm" />
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                    @endif
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Quantity</th>
                                                <th>Stock</th>
                                                <th>Price</th>
                                                <th>Sale Price</th>
                                                <th>Category</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $product)
                                            <tr>
                                                <td>{{$product->id}}</td>
                                                <td><img src="{{asset('assets/images/products')}}/{{$product->image}}"
                                                        width="60" /></td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->quantity}}</td>
                                                <td>{{$product->stock_status}}</td>
                                                <td>৳{{$product->regular_price}}</td>
                                                <td>৳{{$product->sale_price}}</td>
                                                <td>{{$product->category->name}}</td>
                                                <td>{{$product->created_at}}</td>
                                                <td>
                                                    <a
                                                        href="{{route('seller.editproduct',['product_slug'=>$product->slug])}}"><i
                                                            class="fa fa-edit fa-2x text-info"></i></a>
                                                    <a href="#"
                                                        onclick="confirm('Are you sure,You want to delete this product ?') || event.stopImmediatePropagation()"
                                                        style="margin-left:10px;"
                                                        wire:click.prevent="deleteProduct({{$product->id}})"
                                                        style="margin-left:10px;"><i
                                                            class="fa fa-times fa-2x text-danger"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$products->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
