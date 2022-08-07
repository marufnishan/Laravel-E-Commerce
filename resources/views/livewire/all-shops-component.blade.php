<div>
    <div class="container">
        <div class="row">
            @foreach ($sellers as $seller)
            <div class="col-md-3" style="padding: 20px">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('assets/images/shops')}}/{{$seller->shop_thumbnail}}"
                        alt="Shop Thumbnail">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$seller->shop_name}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center">Total Products : {{$seller->product->where('seller_id',$seller->seller_id)->count() }}</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="{{route('sellerShop',$seller->seller_id)}}" class="card-link"><button class="btn btn-info">Go To Shop</button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
