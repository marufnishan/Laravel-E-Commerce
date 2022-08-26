<div>
    <style>

        .sidebar {
            width: 0;
            position: absolute;
            z-index: 1;
            left: 0;
            background-color: #009688;
            overflow-x: hidden;
            transition: 0.5s;
        }

        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #f1f1f1;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .sidebar .closebtn {
            position: relative;
            top: 0;
            right: 25px;
            margin-left: 150px;
        }

        .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: #111;
            color: white;
            padding: 10px 15px;
            border: none;
        }

        .openbtn:hover {
            background-color: #444;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        .list-group-item {
            margin: 5px;
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 700px) {
            .sidebar a {
                font-size: 18px;
            }
        }

    </style>

    <div id="mySidebar" class="sidebar"{{--  style="width: 250px" --}}>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-times fa-2x"></i></a>
        <a class="dname"> <img class="h-12 w-12 rounded-full object-cover" src="{{Auth::user()->profile_photo_url}}"
            alt="{{ Auth::user()->name }}" /> {{Auth::user()->name}}</a>
        @if(Route::has('login'))
        @auth
        @if(Auth::user()->utype === 'ADM')
        <hr>
        <a href="/" class="list-group-item  second-text fw-bold"
            style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Home</a>
        <a href="{{ route('admin.dashboard')}}" class="list-group-item  second-text fw-bold"
            style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Dashboard</a>
        <a href="{{ route('admin.show_users')}}" class="list-group-item  second-text fw-bold"
            style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Users</a>
        <a href="{{ route('admin.show_sellers')}}" class="list-group-item  second-text fw-bold"
            style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Sellers</a>
        <a href="{{ route('admin.categories')}}" class="list-group-item  second-text fw-bold"
            style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Categories</a>
        <a href="{{ route('admin.attributes')}}" class="list-group-item  second-text fw-bold"
            style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Attributes</a>
        <a href="{{ route('admin.products')}}" class="list-group-item  second-text fw-bold"
            style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Products</a>
        <a href="{{ route('admin.homeslider')}}" class="list-group-item  second-text fw-bold"
            style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Home Slider</a>
        <a href="{{ route('admin.homecategories')}}" class="list-group-item  second-text fw-bold"
            style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Home
            Categories</a>
        <a href="{{ route('admin.sale')}}" class="list-group-item  second-text fw-bold"
            style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Sale
            Setting</a>
        <a href="{{ route('admin.coupons')}}" class="list-group-item  second-text fw-bold"
            style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Coupons</a>
        <a href="{{ route('admin.orders')}}" class="list-group-item  second-text fw-bold"
            style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Orders</a>
        <a href="{{ route('admin.contact')}}" class="list-group-item  second-text fw-bold"
            style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Contact
            Messages</a>
        <a href="{{ route('admin.settings')}}" class="list-group-item  second-text fw-bold"
            style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Settings</a>
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="list-group-item  second-text fw-bold"
            style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Logout</a>
        <form id="logout-form" method="POST" action="{{ route('logout') }}">
            @csrf

        </form>

        @elseif(Auth::user()->utype === 'VNDR')
        <a href="{{ route('seller.dashboard')}}" class="list-group-item  second-text fw-bold"
            style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Dashboard</a>
        <a href="{{ route('seller.profile')}}" class="list-group-item  second-text fw-bold"
            style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">My
            Profile</a>
        <a href="{{route('seller.products')}}" class="list-group-item  second-text fw-bold"
            style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Products</a>
        <a href="{{route('seller.orders')}}" class="list-group-item  second-text fw-bold"
            style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Orders</a>
        <a href="{{route('seller.changepassword')}}" class="list-group-item  second-text fw-bold"
            style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Change
            Password</a>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="list-group-item  second-text fw-bold"
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
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="list-group-item  second-text fw-bold"
            style="background: #009688;color:white;margin-top:5px;font-weight: bold;font-size: 2rem;">Logout</a>
        <form id="logout-form" method="POST" action="{{ route('logout') }}">
            @csrf

        </form>

        @endif
        @else


        @endif
        @endif
    </div>



    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }

    </script>
</div>
