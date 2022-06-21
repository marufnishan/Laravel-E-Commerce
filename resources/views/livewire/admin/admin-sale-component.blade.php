<div class="content">
    <style>
        .content {
            padding-top: 40px;
            padding-bottom: 40px;
        }
        .sidebar {
            height: 80vh;
        }
        @media screen and (max-height: 700px) {
            .sidebar {
            height: 80vh !important;
        }
        }

    </style>
    <div class="container-fluid" style="background: #FFFFFF;height: 80vh;">
        <div class="row ">
            <div id="main">
                <div class="col-md-12" style="margin: 0; padding:0; background:black "><button class="openbtn"
                        onclick="openNav()">☰ DASHBOARD</button></div>
                <x-sidebar />
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: linear-gradient(to right, #74ebd5, #acb6e5);text-align: right;">
                        Sale Setting
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <form class="form-horizontal" wire:submit.prevent="updateSale">

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Status</label>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="status">
                                            <option value="0">Inactive</option>
                                            <option value="1">Active</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Sale Date</label>
                                    <div class="col-md-4">
                                        <input type="text" id="sale-date" placeholder="YYYY/MM/DD H:M:S"
                                            class="form-control input-md" wire:model="sale_date" />
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label class="col-md-4 control-label"></label>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Update</button>
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
@push('scripts')
<script>
    $(function () {
        $('#sale-date').datetimepicker({
                format: 'Y-MM-DD h:m:s',
            })
            .on('dp.change', function (ev) {
                var data = $('#sale-date').val();
                @this.set('sale_date', data);
            });
    });

</script>

@endpush
