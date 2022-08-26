<div class="content">
    <div class="container-fluid" style="background: #FFFFFF;height: 80vh;">
        <div class="row ">
            <x-sidebar />
            <div id="main">
                <div class="col-md-12" style="margin: 0; padding:0; background:black "><button class="openbtn"
                        onclick="openNav()">☰ DASHBOARD</button></div>
                
                <div class="panel panel-default" >
                    <div class="panel-heading" style="background: linear-gradient(to right, #74ebd5, #acb6e5); padding-top: 20px;text-align: right;">
                        Manage Home Categories
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif

                            <form class="form-horizontal" wire:submit.prevent="updateHomeCategory">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Choose Category</label>
                                    <div class="col-md-4" wire:ignore>
                                        <select class="sel_categories form-control" name="categories[]"
                                            multiple="multiple" wire:model="selected_categories">
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">No of Products</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-md"
                                            wire:model="numberofproducts" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"></label>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@push('scripts')
<script>
    $(document).ready(function () {
        $('.sel_categories').select2();
        $('.sel_categories').on('change', function (e) {
            var data = $('.sel_categories').select2("val");
            @this.set('selected_categories', data);
        });
    });

</script>
@endpush
