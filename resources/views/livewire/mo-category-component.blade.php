<div>
    <style>
        .category-item{
            line-height: 50px;
            text-transform: uppercase;
            padding-right: 6px;
        }
        .category-item a{
            color: #666666;
        }
    </style>
    @foreach ($categories as $category)
                            <li class="category-item">
                                <a href="{{route('product.category',['category_slug'=>$category->slug])}}"
                                    class="cate-link">{{$category->name}}</a>
                            </li>
                            @endforeach
</div>
