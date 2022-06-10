<div>
    <div id="sidebar-wrapper">
        <div class="list-group  my-3 mt-5">
            <div class="list-group" style="margin-top:20px;background: #40b0b5; border: 1px;
            border-radius: 4px;">
                <a href="#" style="color:white;font-size:30px;padding:20px;"><b>Dashboard</b> </a>
            </div>
            @if(Route::has('login'))
            @auth
            @if(Auth::user()->utype === 'ADM')
            <hr>
            <a href="{{ route('admin.show_users')}}" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"><i class="fa fa-home" aria-hidden="true" style="font-size:24px; padding-right:10px;" ></i>All Users</a>
            <a href="{{ route('admin.show_sellers')}}" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"><i class="fa fa-home" aria-hidden="true" style="font-size:24px; padding-right:10px;" ></i>Sellers</a>
            <a href="{{ route('admin.categories')}}" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"><i class="fa fa-home" aria-hidden="true" style="font-size:24px; padding-right:10px;" ></i>Categories</a>
            <a href="{{ route('admin.attributes')}}" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Attributes</a>
            <a href="{{ route('admin.products')}}" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">All
                Products</a>
            <a href="{{ route('admin.homeslider')}}" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Manage
                Home Slider</a>
            <a href="{{ route('admin.homecategories')}}" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"><i class="fa fa-sliders" style="font-size:24px; padding-right:10px;"></i>Manage
                Home Categories</a>
            <a href="{{ route('admin.sale')}}" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"><i class="fa fa-hammer"></i>Sale
                Setting</a>
            <a href="{{ route('admin.coupons')}}" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">All
                Coupon</a>
            <a href="{{ route('admin.orders')}}" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">All
                Orders</a>
            <a href="{{ route('admin.contact')}}" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"><i class="fa fa-address-book"></i>Contact
                Messages</a>
            <a href="{{ route('admin.settings')}}" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"><i class="fa fa-gears"></i>Settings</a>

            @elseif(Auth::user()->utype === 'VNDR')
            <a href="{{ route('seller.dashboard')}}" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Dashboard</a>
            <a href="{{ route('seller.profile')}}" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">My
                Profile</a>
            <a href="{{route('seller.products')}}" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">All Products</a>
                <a href="{{route('seller.orders')}}" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">All Orders</a>
                <a href="{{route('seller.changepassword')}}" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Change Password</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Logout</a>
                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                    
                   </form>
                

            @else
            <a href="{{ route('user.dashboard')}}" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Dashboard</a>
            <a href="{{ route('user.profile')}}" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">My
                Profile</a>
            <a href="{{ route('user.orders')}}" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">My
                Orders</a> 
            <a href="{{ route('user.changepassword')}}" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Change
                Password</a> 
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="list-group-item  second-text fw-bold"
                style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Logout</a>
                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                    
                   </form>

            @endif
            @else


            @endif
            @endif
        </div>
    </div>
</div>
