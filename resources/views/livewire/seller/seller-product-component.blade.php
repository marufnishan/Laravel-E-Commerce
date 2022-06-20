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

    </style>
   <div class="container-fluid" style="background: #FFFFFF;">
        <div class="row " >
            {{-- Sidebar Start --}}
            <div class="col-md-2" id="sidebar" style="background: #009688;height:80vh; overflow-y: scroll;">


                <x-sidebar />
                
            </div>
            {{-- Sidebar End --}}
            <div class="col-md-10" id="dashboard"style="height:80vh; overflow-y: scroll; ">
                <div class="row" style="padding-top:20px">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background: linear-gradient(to right, #74ebd5, #acb6e5);">
                                <div class="row">
                                    <div class="col-md-4">
                                        All Products
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{route('seller.addproduct')}}" class="btn btn-success pull-right">Add
                                            New</a>
                                    </div>
                                    <div class="col-md-4">
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
                                                <td>{{$product->regular_price}}</td>
                                                <td>{{$product->sale_price}}</td>
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
