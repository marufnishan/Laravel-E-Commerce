<div>
    <div class="container">
        <div class="row">
            
    <div class="wrap-show-advance-info-box style-1">
        <h3 class="title-box">Seller Products</h3>
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
