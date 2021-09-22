<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>	
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bot.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.css" integrity="sha512-40vN6DdyQoxRJCw0klEUwZfTTlcwkOLKpP8K8125hy9iF4fi8gPpWZp60qKC6MYAFaond8yQds7cTMVU8eMbgA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles

</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Hotline: (+88) 01718863771" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: +8801718863771</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								<li class="menu-item menu-item-has-children parent">
									<div id="google_translate_element"></div>
									<script type="text/javascript">
										function googleTranslateElementInit() {
										  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
										}
										</script>
                                   
								</li>
								
								<li class="menu-item menu-item-has-children parent" >
									<a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="Pound (GBP)" href="#">Pound (GBP)</a>
										</li>
										<li class="menu-item" >
											<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
										<li class="menu-item" >
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
									</ul>
								</li>
								@if(Route::has('login'))
								        @auth
										@if(Auth::user()->utype === 'ADM')
										<li class="menu-item menu-item-has-children parent" >
									       <a title="My Account" href="#">My Account ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									          <ul class="submenu curency" >
									 	         <li class="menu-item" >
											        <a title="Dashboard" href="{{ route('admin.dashboard')}}">Dashboard</a>
									             </li>
												 <li class="menu-item">
													<a title="Categories" href="{{ route('admin.categories')}}">Categories</a>
 												 </li>
												  <li class="menu-item">
													<a title="Products" href="{{ route('admin.products')}}">All Products</a>
 												 </li>
												  <li class="menu-item">
													<a title="Manage Home Slider" href="{{ route('admin.homeslider')}}">Manage Home Slider</a>
												  </li>
												  <li class="menu-item">
													<a title="Manage Home Categories" href="{{ route('admin.homecategories')}}">Manage Home Categories</a>
												  </li>
												  <li class="menu-item">
													<a title="Sale Setting" href="{{ route('admin.sale')}}">Sale Setting</a>
												  </li>
												  <li class="menu-item">
													<a title="All Coupon" href="{{ route('admin.coupons')}}">All Coupon</a>
												  </li>
												  <li class="menu-item">
													<a title="All Orders" href="{{ route('admin.orders')}}">All Orders</a>
												  </li>
												</li>
												<li class="menu-item">
												  <a title="Contact Messages" href="{{ route('admin.contact')}}">Contact Messages</a>
												</li>
												  <li class="menu-item">
													<a title="Settings" href="{{ route('admin.settings')}}">Settings</a>
												  </li>
												 <li class='menu-item'>
												  		<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
												  </li>
												 <form id="logout-form" method="POST" action="{{ route('logout') }}">
												  @csrf
												  
												 </form>
								              </ul>
								        </li>
										@else
										<li class="menu-item menu-item-has-children parent" >
									       <a title="My Account" href="#">My Account ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									          <ul class="submenu curency" >
									 	         <li class="menu-item" >
											        <a title="Dashboard" href="{{ route('user.dashboard')}}">Dashboard</a>
									             </li>
												 <li class="menu-item" >
											        <a title="My Orders" href="{{ route('user.orders')}}">My Orders</a>
									             </li>
												 <li class="menu-item" >
											        <a title="Change Password" href="{{ route('user.changepassword')}}">Change Password</a>
									             </li>
												 <li class='menu-item'>
												  		<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
												  </li>
												 <form id="logout-form" method="POST" action="{{ route('logout') }}">
												  @csrf
												  
												 </form>
								              </ul>
								        </li>
										@endif
								        @else
									     <li class="menu-item" ><a title="Register or Login" href="{{route('login')}}">Login</a></li>
									     <li class="menu-item" ><a title="Register or Login" href="{{route('register')}}">Register</a></li>
								        @endif	
								@endif
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="/" class="link-to-home"><img src="{{ asset('assets/images/logo-top-1.png') }}" alt="mercado"></a>
						</div>

						@livewire('header-search-component')

						<div class="wrap-icon right-section">
							@livewire('wishlist-count-component')

							@livewire('cart-count-component')

							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="about-us.html" class="link-term mercado-item-title">About Us</a>
								</li>
								<li class="menu-item">
									<a href="/Shop" class="link-term mercado-item-title">Shop</a>
								</li>
								<li class="menu-item">
									<a href="/cart" class="link-term mercado-item-title">Cart</a>
								</li>
								<li class="menu-item">
									<a href="/Checkout" class="link-term mercado-item-title">Checkout</a>
								</li>
								<li class="menu-item">
									<a href="/contact-us" class="link-term mercado-item-title">Contact Us</a>
								</li>																	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
			<section class="section-1">
				<div class="wrapper">
					<div class="chat-box" id="chat-box">
						<div class="chat-header">NishanBD</div>
						<div id="container-1" class="container-1">
							<div id="chat" class="chat">
								<div id="messages" class="messages"></div>
								<div class="text-content ">
									<input id="input" type="text" placeholder="  Say something........           "  autocomplete="off" autofocus="true" />
								</div>
								<div class="bot">
									<div class="btn btn-outline-success"  id="send"  onclick="sendMsg()">Send</div>
									<div class="btn btn-outline-success" id="clear" onclick="clearField()">Clear</div>
									<div class="btn btn-outline-success" onclick="closeChat()">Close Chat</div>
								</div>
							</div>
						</div>
						
					</div>
					<div class="chat-us" onclick="openChat()">
						Chat
					</div>
				</div>				
			</section>
	</header>

    {{$slot}}

	@livewire('footer-component')
	
	<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	<script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>
	<script src="{{ asset('assets/js/translate.js') }}"></script>
	<script src="{{ asset('assets/js/index.js') }}"></script>
	<script src="{{ asset('assets/js/constants.js') }}"></script>
	<script src="{{ asset('assets/js/speech.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.js" integrity="sha512-jWNpWAWx86B/GZV4Qsce63q5jxx/rpWnw812vh0RE+SBIo/mmepwOSQkY2eVQnMuE28pzUEO7ux0a5sJX91g8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.tiny.cloud/1/i2377ongbr8s9tkxgk00jgg6455m7jvw0hpkgbv58lqvnpzx/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	@livewireScripts

	@stack('scripts')
</body>
</html>