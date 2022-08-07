<main id="main" class="main-site left-sidebar">
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>All Products</span></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-lg-12">
                @if($sproducts->count() > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())

                <div class="wrap-show-advance-info-box style-1 has-countdown">
                    <h3 class="title-box">On Sale</h3>
                    <div class="wrap-top-banner">
                        <a href="#" class="link-banner banner-effect-2">
                            <figure><img src="{{ asset('assets/images/digital-electronic-banner.jpg') }}" width="1170"
                                    height="240" alt=""></figure>
                        </a>
                    </div>
                    <div class="wrap-countdown mercado-countdown"
                        data-expire="{{ Carbon\Carbon::parse($sale->sale_date)->format('Y/m/d h:m:s')}}"></div>
                    @foreach($sproducts as $sproduct)
                    <div class="mcol-6 col-md-2 col-sm-3  product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="{{route('product.details',['slug'=>$sproduct->slug])}}"
                                title="{{$sproduct->name}}">
                                <figure><img src="{{ asset('assets/images/products') }}/{{$sproduct->image}}"
                                        width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                </figure>
                            </a>
                            <div class="wrap-btn">
                                <a href="{{route('product.details',['slug'=>$sproduct->slug])}}"
                                    class="function-link">quick view</a>
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
                    @endforeach
                </div>
                <div class="pull-right">
                    {{$sproducts->links()}}
                    <hr>
                </div>
                @endif

            </div>

            <div class="col-lg-12">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                    <div class="widget mercado-widget categories-widget" style="margin-top: 30px !important;">
                        <h2 class="widget-title">All Categories</h2>
                        <div class="widget-content">
                            <ul class="list-category">
                                @foreach ($categories as $category)
                                <li class="category-item {{count($category->subCategories) > 0 ? 'has-child-cate':''}} ">
                                    <a href="{{route('product.category',['category_slug'=>$category->slug])}}"
                                        class="cate-link">{{$category->name}}</a>
                                    @if(count($category->subCategories) > 0)
                                    <span class="toggle-control">+</span>
                                    <ul class="sub-cate">
                                        @foreach ($category->subCategories as $scategory)
                                        <li class="category-item">
                                            <a href="{{route('product.category',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug])}}"
                                                class="cate-link"><i class="fa fa-caret-right"></i>{{$scategory->name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div><!-- Categories widget-->
    
    
                    <div class="widget mercado-widget filter-widget price-filter">
                        <h2 class="widget-title">Price <span class="text-info">৳{{$min_price}} - ৳{{$max_price}}</span></h2>
                        <div class="widget-content" style="padding:10px 5px 40px 5px;">
                            <div id="slider" wire:ignore></div>
                        </div>
                    </div><!-- Price-->
    
                    <div class="widget mercado-widget widget-product">
                        <h2 class="widget-title">Popular Products</h2>
                        <div class="widget-content">
                            <ul class="products">
                                @foreach ($popular_products as $p_product)
                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="{{route('product.details',['slug'=>$p_product->slug])}}"
                                                title="{{$p_product->name}}">
                                                <figure><img
                                                        src="{{ asset('assets/images/products' ) }}/{{$p_product->image}}"
                                                        alt="{{$p_product->name}}"></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('product.details',['slug'=>$p_product->slug])}}"
                                                title="{{$p_product->name}}"
                                                class="product-name"><span>{{$p_product->name}}</span></a>
                                            <div class="wrap-price"><span
                                                    class="product-price">৳{{$p_product->regular_price}}</span></div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
    
                </div>
                <!--end sitebar-->
                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                    <div class="banner-shop">
    
                    </div>
                    <div class="wrap-shop-control">
                        <h1 class="shop-title">All Products</h1>
                        <div class="wrap-right">
                            <div class="sort-item orderby ">
                                <select name="orderby" class="use-chosen" wire:model="sorting">
                                    <option value="default" selected="selected">Default sorting</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </div>
    
                        </div>
    
                    </div>
                    <!--end wrap shop control-->
    
                    <style>
                        .product-wish {
                            position: absolute;
                            top: 10%;
                            left: 0;
                            z-index: 99;
                            right: 30px;
                            text-align: right;
                            padding-top: 0;
                        }
    
                        .product-wish .fa {
                            color: #cbcbcb;
                        }
    
                        .product-wish .fa:hover {
                            color: #ff7007;
                        }
    
                        .fill-heart {
                            color: #ff7007 !important;
                        }
    
                    </style>
                    <div class="row">
    
                        <ul class="product-list grid-products equal-container">
                            @php
                            $witems = Cart::instance('wishlist')->content()->pluck('id') ;
                            @endphp
                            @foreach ($products as $product)
                            <li class="smcol-6 col-lg-4 col-md-4 col-sm-6 col-xs-6 " @if ($loop->last) id="last_record" @endif>
                                <div class="product product-style-3 equal-elem " style="height: 500px;">
                                    <div class="product-thumnail">
                                        <a href="{{route('product.details',['slug'=>$product->slug])}}"
                                            title="{{$product->name}}">
                                            <figure><img src="{{ asset('assets/images/products') }}/{{$product->image}}"
                                                    alt="{{$product->name}}"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{route('product.details',['slug'=>$product->slug])}}"
                                            class="product-name"><span>{{$product->name}}</span></a>
                                        <div class="wrap-price"><span
                                                class="product-price">৳{{$product->regular_price}}</span></div>
                                        <div class="product-rating">
                                            <style>
                                                .color-gray {
                                                    color: #e6e6e6 !important;
                                                }
    
                                            </style>
                                            @php
                                            $avgrating = 0;
                                            @endphp
                                            @foreach($product->orderItems->where('rstatus',1) as $orderItem)
                                            @php
                                            $avgrating = $avgrating + $orderItem->review->rating;
                                            @endphp
                                            @endforeach
                                            @for($i = 1; $i <=5; $i++) @if($i<=$avgrating) <i class="fa fa-star"
                                                aria-hidden="true"></i>
                                                @else
                                                <i class="fa fa-star color-gray" aria-hidden="true"></i>
                                                @endif
                                                @endfor
                                                <a href="#"
                                                    class="count-review">({{$product->orderItems->where('rstatus',1)->count()}}
                                                    review)</a>
                                        </div>
                                        <a href="#" class="btn add-to-cart"
                                            wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">Add
                                            To Cart</a>
                                        <div class="product-wish">
                                            @if($witems->contains($product->id))
                                            <a href="#" wire:click.prevent="removeFromWishlist({{$product->id}})"><i
                                                    class="fa fa-heart fill-heart"></i></a>
                                            @else
                                            <a href="#"
                                                wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><i
                                                    class="fa fa-heart"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @if ($loadAmount >= $totalRecords)
                    <h1 class="text-warning font-bold text-center my-10">No Remaining Records!</h1>
                @endif
                <script>
                    const lastRecord = document.getElementById('last_record');
                    const options = {
                        root: null,
                        threshold: 1,
                        rootMargin: '0px'
                    }
                    const observer = new IntersectionObserver((entries, observer) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                @this.loadMore()
                            }
                        });
                    });
                    observer.observe(lastRecord);
                </script>
                </div>
                <!--end main products area-->
            </div>
           

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</main>

@push('scripts')
<script>
    var slider = document.getElementById('slider');
    noUiSlider.create(slider, {
        start: [0, 1000],
        connect: true,
        range: {
            'min': 0,
            'max': 1000
        },
        pips: {
            mode: 'steps',
            stepped: true,
            density: 4
        }
    });

    slider.noUiSlider.on('update', function (value) {
        @this.set('min_price', value[0]);
        @this.set('max_price', value[1]);
    });

</script>
@endpush
