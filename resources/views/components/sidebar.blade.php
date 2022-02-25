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
            <a href="{{ route('admin.categories')}}" class="list-group-item  second-text fw-bold"
                style="background: #092f0d;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"></i>Categories</a>
            <a href="{{ route('admin.attributes')}}" class="list-group-item  second-text fw-bold"
                style="background: #092f0d;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"></i>Attributes</a>
            <a href="{{ route('admin.products')}}" class="list-group-item  second-text fw-bold"
                style="background: #092f0d;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"></i>All
                Products</a>
            <a href="{{ route('admin.homeslider')}}" class="list-group-item  second-text fw-bold"
                style="background: #092f0d;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"></i>Manage
                Home Slider</a>
            <a href="{{ route('admin.homecategories')}}" class="list-group-item  second-text fw-bold"
                style="background: #092f0d;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"></i>Manage
                Home Categories</a>
            <a href="{{ route('admin.sale')}}" class="list-group-item  second-text fw-bold"
                style="background: #092f0d;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"></i>Sale
                Setting</a>
            <a href="{{ route('admin.coupons')}}" class="list-group-item  second-text fw-bold"
                style="background: #092f0d;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"></i>All
                Coupon</a>
            <a href="{{ route('admin.orders')}}" class="list-group-item  second-text fw-bold"
                style="background: #092f0d;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"></i>All
                Orders</a>
            <a href="{{ route('admin.contact')}}" class="list-group-item  second-text fw-bold"
                style="background: #092f0d;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"></i>Contact
                Messages</a>
            <a href="{{ route('admin.settings')}}" class="list-group-item  second-text fw-bold"
                style="background: #092f0d;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"></i>Settings</a>

            @elseif(Auth::user()->utype === 'VNDR')
            <a href="{{ route('seller.dashboard')}}" class="list-group-item  second-text fw-bold"
                style="background: #092f0d;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"></i>Dashboard</a>
            <a href="{{ route('seller.profile')}}" class="list-group-item  second-text fw-bold"
                style="background: #092f0d;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"></i>My
                Profile</a>
            <a href="{{route('seller.products')}}" class="list-group-item  second-text fw-bold"
                style="background: #092f0d;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"></i>All Products</a>
                

            @else
            <a href="{{ route('user.dashboard')}}" class="list-group-item  second-text fw-bold"
                style="background: #092f0d;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"></i>Dashboard</a>
            <a href="{{ route('user.profile')}}" class="list-group-item  second-text fw-bold"
                style="background: #092f0d;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"></i>My
                Profile</a>
            <a href="{{ route('user.orders')}}" class="list-group-item  second-text fw-bold"
                style="background: #092f0d;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;"></i>My
                Orders</a>

            @endif
            @else


            @endif
            @endif
        </div>
    </div>
</div>
