<div class="content">
    <style>
        .content {
            padding-top: 30px;
            padding-bottom: 40px;
        }

    </style>
    <div class="container-fluid" style="background: #FFFFFF;">
        <div class="row ">
            {{-- Sidebar Start --}}
            <div class="col-md-2" style="background: #009688;">

                <x-sidebar />

            </div>
            {{-- Sidebar End --}}

            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: linear-gradient(to right, #74ebd5, #acb6e5);">
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
