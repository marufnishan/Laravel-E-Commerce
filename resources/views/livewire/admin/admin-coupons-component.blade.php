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
                    <div class="panel-heading" style="background: linear-gradient(to right, #74ebd5, #acb6e5);">
                        <div class="row">
                            <div class="col-md-6" style="padding-top: 10px ;">
                                All Coupons
                            </div>
                            <div class="col-md-6" style="padding-top: 10px ;">
                                <a href="{{route('admin.addcoupon')}}" class="btn btn-success pull-right" style="padding-top: 10px ;" >Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <table class="table table-striped">
                                <thead>
                                    <tr style="background:#009688;color: white;">
                                        <th>Id</th>
                                        <th>Coupon Code</th>
                                        <th>Coupon Type</th>
                                        <th>Coupon Value</th>
                                        <th>Cart Value</th>
                                        <th>Expiry Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($coupons as $coupon)
                                    <tr>
                                        <td>{{$coupon->id}}</td>
                                        <td>{{$coupon->code}}</td>
                                        <td>{{$coupon->type}}</td>
                                        @if($coupon->type == 'fixed')
                                        <td>${{$coupon->value}}</td>
                                        @else
                                        <td>{{$coupon->value}} %</td>
                                        @endif
                                        <td>{{$coupon->cart_value}}</td>
                                        <td>{{$coupon->expiry_date}}</td>
                                        <td>
                                            <a href="{{route('admin.editcoupon',['coupon_id'=>$coupon->id])}}"><i
                                                    class="fa fa-edit fa-2x"></i></a>
                                            <a href="#"
                                                onclick="confirm('Are you sure,You want to delete this coupon ?') || event.stopImmediatePropagation()"
                                                wire:click.prevent="deleteCoupon({{$coupon->id}})"
                                                style="margin-left:10px;"><i
                                                    class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
