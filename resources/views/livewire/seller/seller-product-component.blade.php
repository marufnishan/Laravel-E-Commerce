<div>
<style>
        #dashboard::-webkit-scrollbar {
  display: none;
}

#sidebar::-webkit-scrollbar {
  display: none;
}
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }

.sidebar {
            height: 82vh;
        }
@media screen and (max-height: 700px) {
            .sidebar {
            height: 82vh !important;
        }
    }
    </style>

    <div class="container-fluid">
        <div class="row ">
            <div id="main">
                <div class="col-md-12" style="margin: 0; padding:0; background:black "><button class="openbtn"
                        onclick="openNav()">☰ DASHBOARD</button></div>
                <x-sidebar />
                <div class="col-md-12" id="dashboard" style="height:80vh; overflow-y: scroll; padding:0px; margin:0; ">
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
