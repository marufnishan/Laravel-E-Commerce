<div class="wrap-search center-section">
    <div class="wrap-search-form">
        <form action="{{route('product.search')}}" id="form-search-top" name="form-search-top">
            <input type="text" id="search" name="search" value="{{$search}}" placeholder="Search here...">
            <button form="form-search-top" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            <div class="wrap-list-cate">
                <input type="hidden" name="product_cat" value="{{$product_cat}}" id="product-cate">
                <input type="hidden" name="product_cat_id" value="{{$product_cat_id}}" id="product-cate-id">
                <a href="#" class="link-control">{{str_split($product_cat,12)[0]}}</a>
                <ul class="list-cate">
                    <li class="level-0">All Category</li>
                    @foreach ($categories as $category)
                    <li class="level-1" data-id="{{$category->id}}">{{$category->name}}</li>
                    @endforeach
                </ul>
            </div>
        </form>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
</script>
<script type="text/javascript">
    var route = "{{ url('autocomplete-search') }}";
    $('#search').typeahead({
        source: function (query, process) {
            return $.get(route, {
                query: query
            }, function (data) {
                return process(data);
            });
        }
    });
</script>