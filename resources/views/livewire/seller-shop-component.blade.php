<div>
    <div class="container">
        <div class="row">
            
    <div class="wrap-show-advance-info-box style-1">
        <img src="{{asset('assets/images/shops')}}/{{$seller->shop_thumbnail}}"
                            alt="Shop Thumbnail" class="shopthmnl" style="width: 100%; height:30rem;border-radius: 5px;">
        <h3 class="title-box"><span style="color: aqua">Shop Name : </span><span >{{$seller->shop_name}}</span> <b class=" pull-right"><i class="fa fa-comment" style="margin-right: 10px;"> <a href="https://t.me/+88{{$seller->mobile}}" style="color:white">Chat</a> </i><i class="fa fa-phone" style="margin-right: 5px;" aria-hidden="true"></i><a href="https://wa.me/+88{{$seller->mobile}}" style="color:white">{{$seller->mobile}}</a></b> </h3>
        <div class="wrap-products">
            <div class="wrap-product-tab tab-style-1">
                <div class="tab-contents">
                    <div class="tab-content-item active" id="digital_1a">

                        @foreach($sellerproducts as $sellerproduct)
                        <div class="mcol-6 col-md-2 col-sm-6 product product-style-2 equal-elem " style="height: 300px;">
                            <div class="product-thumnail">
                                <a href="{{route('product.details',['slug'=>$sellerproduct->slug])}}"
                                    title="{{$sellerproduct->name}}">
                                    <figure><img
                                            src="{{ asset('assets/images/products') }}/{{$sellerproduct->image}}"
                                            width="800" height="800" alt="{{$sellerproduct->name}}"></figure>
                                </a>
                                <div class="wrap-btn">
                                    <a href="{{route('product.details',['slug'=>$sellerproduct->slug])}}"
                                        class="function-link">quick view</a>
                                </div>
                                <div class="group-flash">
                                    <span class="flash-item new-label">new</span>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="{{route('product.details',['slug'=>$sellerproduct->slug])}}"
                                    class="product-name"><span>{{$sellerproduct->name}}</span></a>
                                <div class="wrap-price"><span
                                        class="product-price">৳{{$sellerproduct->regular_price}}</span></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</div>
