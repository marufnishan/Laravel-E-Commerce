<main id="main">
    <div class="container-fluid" id="banner">

        <!--MAIN SLIDE-->
        <div class="wrap-main-slide">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true"
                data-dots="false">
                @foreach($sliders as $slide)
                <div class="item-slide">
                    <img src="{{ asset('assets/images/sliders') }}/{{$slide->image}}" alt="" class="img-slide">
                    <div class="slide-info slide-3">
                        <h2 class="f-title"> <b>{{$slide->title}}</b></h2>
                        <span class="subtitle">{{$slide->subtitle}}</span>
                        <p class="sale-info">Only price: <span class="price">৳{{$slide->price}}</span></p>
                        <a href="{{$slide->link}}" class="btn-link">Shop Now</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!--BANNER-->
        {{-- Shop Slider --}}
        <div class="container">
            <div class="tab-content-item active" id="digital_1a">
                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5"
                    data-loop="false" data-nav="true" data-dots="false"
                    data-responsive='{"0":{"items":"2"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"6"}}'>

                    @foreach($shops as $shops)
                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="{{route('sellerShop',$shops->seller_id)}}" title="{{$shops->name}}">
                                <figure><img src="{{asset('assets/images/shops')}}/{{$shops->shop_thumbnail}}"
                                        style="width:100%;height:100px;margin:0;padding:0" alt="{{$shops->name}}">
                                </figure>
                            </a>
                            <div class="wrap-btn">
                                <a href="{{route('sellerShop',$shops->seller_id)}}" class="function-link">Go To Shop</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- Shop Slider --}}
        <div>
            <footer id="footer">
                <div class="wrap-footer-content footer-style-1">

                    <div class="wrap-function-info">
                        <div class="container">
                            <div class="row">
                                <ul>
                                    <li class="fc-info-item">
                                        <i class="fa fa-car" aria-hidden="true"></i>
                                        <div class="wrap-left-info">
                                            <h4 class="fc-name">Free Shipping</h4>
                                            <p class="fc-desc">Free On Oder Over ৳99</p>
                                        </div>

                                    </li>
                                    <li class="fc-info-item">
                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                        <div class="wrap-left-info">
                                            <h4 class="fc-name">Money Returns</h4>
                                            <p class="fc-desc">30 Days money return</p>
                                        </div>

                                    </li>
                                    <li class="fc-info-item">
                                        <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                                        <div class="wrap-left-info">
                                            <h4 class="fc-name">Safe Payment</h4>
                                            <p class="fc-desc">Safe your online payment</p>
                                        </div>

                                    </li>
                                    <li class="fc-info-item">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <div class="wrap-left-info">
                                            <h4 class="fc-name">Online Suport</h4>
                                            <p class="fc-desc">We Have Support 24/7</p>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </footer>
        </div>
        <div class="container">
            <!--Product Categories-->
            <div class="wrap-show-advance-info-box style-1">
                <h3 class="title-box">Product Categories</h3>
                <div class="wrap-products">
                    <div class="wrap-product-tab tab-style-1">
                        <div class="tab-control">
                            @foreach($categories as $key=>$category)
                            <a href="#category_{{$category->id}}"
                                class="tab-control-item {{$key==0 ? 'active':''}}">{{$category->name}}</a>
                            @endforeach

                        </div>
                        <div class="tab-contents">
                            @foreach($categories as $key=>$category)
                            <div class="tab-content-item {{$key==0 ? 'active':''}}" id="category_{{$category->id}}">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                    data-responsive='{"0":{"items":"2"},"480":{"items":"3"},"768":{"items":"4"},"992":{"items":"5"},"1200":{"items":"5"}}'>

                                    @php
                                    $c_products =
                                    DB::table('products')->where('category_id',$category->id)->get()->take($no_of_products);
                                    @endphp
                                    @foreach($c_products as $c_product)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{route('product.details',['slug'=>$c_product->slug])}}"
                                                title="{{$c_product->name}}">
                                                <figure><img
                                                        src="{{ asset('assets/images/products') }}/{{$c_product->image}}"
                                                        width="800" height="800" alt="{{$c_product->name}}"></figure>
                                            </a>
                                            <div class="wrap-btn">
                                                <a href="{{route('product.details',['slug'=>$c_product->slug])}}"
                                                    class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('product.details',['slug'=>$c_product->slug])}}"
                                                class="product-name"><span>{{$c_product->name}}</span></a>
                                            <div class="wrap-price"><span class="product-price">৳{{$c_product->regular_price}}</span></div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!--Latest Products-->
            <div class="wrap-show-advance-info-box style-1">
                <h3 class="title-box">Latest Products</h3>

                @foreach($lproducts as $lproduct)
                <div class="mcol-6 col-md-2 col-sm-3 product product-style-2 equal-elem " style="height: 250px;">
                    <div class="box">
                        <div class="product-thumnail">
                            <a href="{{route('product.details',['slug'=>$lproduct->slug])}}"
                                title="{{$lproduct->name}}">
                                <figure><img src="{{ asset('assets/images/products') }}/{{$lproduct->image}}"
                                        style="width:auto;height:150px;margin:0;padding:0" alt="{{$lproduct->name}}">
                                </figure>
                            </a>
                            <div class="wrap-btn">
                                <a href="{{route('product.details',['slug'=>$lproduct->slug])}}"
                                    class="function-link">quick view</a>
                            </div>
                            <div class="group-flash">
                                <span class="flash-item new-label">new</span>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="{{route('product.details',['slug'=>$lproduct->slug])}}"
                                class="product-name"><span>{{$lproduct->name}}</span></a>
                            <div class="wrap-price"><span class="product-price">৳{{$lproduct->regular_price}}</span>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
            <!--  End Latest product -->

            <!-- Sale Product Start  -->
            @if($sproducts->count() > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
            <div class="wrap-show-advance-info-box style-1">
                <h3 class="title-box">On Sale</h3>
                @foreach($sproducts as $sproduct)
                <div class="mcol-6 col-md-2 col-sm-3 product product-style-2 equal-elem" style="height: 250px;">
                    <div class="box">
                        <div class="product-thumnail">
                            <a href="{{route('product.details',['slug'=>$sproduct->slug])}}"
                                title="{{$sproduct->name}}">
                                <figure><img src="{{ asset('assets/images/products') }}/{{$sproduct->image}}"
                                        style="width:auto;height:150px;margin:0;padding:0"
                                        alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                </figure>
                            </a>
                            <div class="wrap-btn">
                                <a href="{{route('product.details',['slug'=>$sproduct->slug])}}"
                                    class="function-link">quick
                                    view</a>
                            </div>
                            <div class="group-flash">
                                <span class="flash-item sale-label">sale</span>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="{{route('product.details',['slug'=>$sproduct->slug])}}"
                                class="product-name"><span>{{$sproduct->name}}</span></a>
                            <div class="wrap-price"><ins>
                                    <p class="product-price">৳{{$sproduct->sale_price}}</p>
                                </ins> <del>
                                    <p class="product-price">৳{{$sproduct->regular_price}}</p>
                                </del></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
            <!--  End Sale product -->

            <!--Popular Products-->
            <div class="wrap-show-advance-info-box style-1">
                <h3 class="title-box">Popular Products</h3>
                @foreach($pproducts as $pproduct)
                <div class="mcol-6 col-md-2 col-sm-3 product product-style-2 equal-elem " style="height: 250px;">
                    <div class="box">
                        <div class="product-thumnail">
                            <a href="{{route('product.details',['slug'=>$pproduct->slug])}}"
                                title="{{$pproduct->name}}">
                                <figure><img src="{{ asset('assets/images/products') }}/{{$pproduct->image}}"
                                        style="height: 150px; width:100%;" alt="{{$pproduct->name}}"></figure>
                            </a>
                            <div class="wrap-btn">
                                <a href="{{route('product.details',['slug'=>$pproduct->slug])}}"
                                    class="function-link">quick view</a>
                            </div>
                            <div class="group-flash">
                                <span class="flash-item new-label">populer</span>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="{{route('product.details',['slug'=>$pproduct->slug])}}"
                                class="product-name"><span>{{$pproduct->name}}</span></a>
                            <div class="wrap-price"><span class="product-price">৳{{$pproduct->regular_price}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!--  End Popular product -->
        </div>
</main>
