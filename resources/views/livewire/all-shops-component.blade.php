<div>
    <style>
        #box{
            width: 100%;
    margin-top: 20px;
    margin-bottom: 20px;
    border: 1px solid #feefef;
    padding: 10px;
    border-radius: 10px;
    box-shadow: 2px 2px 10px #979191;
        }
    </style>
    <div class="container">
        <div class="row">
            @foreach ($sellers as $seller)
                <div class="col-md-3">
                    <div class="card" id="box">
                        <img class="card-img-top" src="{{asset('assets/images/shops')}}/{{$seller->shop_thumbnail}}"
                            alt="Shop Thumbnail" style="width: 100%; height:100px;border-radius: 5px;">
                        <div class="card-body">
                            <h5 class="card-title text-center"> <b>{{$seller->shop_name}}</b></h5>
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
