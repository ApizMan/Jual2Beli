<main id="main" class="main-site">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>	
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
	
</head>
<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>								
								<li class="menu-item lang-menu menu-item-has-children parent">
									<a title="English" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-en.png') }}" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu lang" >
										<li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-hun.png') }}" alt="lang-hun"></span>Hungary</a></li>
										<li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-ger.png') }}" alt="lang-ger" ></span>German</a></li>
										<li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-fra.png') }}" alt="lang-fre"></span>French</a></li>
										<li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-can.png') }}" alt="lang-can"></span>Canada</a></li>
									</ul>
								</li>
								
								@if(Route::has('login'))
									@auth
									@if(Auth::user()->utype === 'ADM')
										<li class="menu-item menu-item-has-children parent" >
											<a title="My Account" href="#">My Account ({{ Auth::user()->name }})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<ul class="submenu curency" >
												<li class="menu-item" >
													<a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
												</li>
												<li class="menu-item" >
													<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
												</li>
												<form id="logout-form" method="POST" action="{{ route('logout') }}">
													@csrf													
												</form>
											</ul>
										</li>
									@else
										<li class="menu-item menu-item-has-children parent" >
											<a title="My Account" href="#">My Account ({{ Auth::user()->name }})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<ul class="submenu curency" >
												<li class="menu-item" >
													<a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
												</li>
												<li class="menu-item" >
													<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
												</li>
												<form id="logout-form" method="POST" action="{{ route('logout') }}">
													@csrf													
												</form>
											</ul>
										</li>
									@endif
									@else
										<li class="menu-item" ><a title="Register or Login" href="{{ route('login') }}">Login</a></li>
										<li class="menu-item" ><a title="Register or Login" href="{{ route('register') }}">Register</a></li>
									@endif
								@endif
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="{{ url('/') }}" class="link-to-home"><img src="{{ asset('assets/images/logo-top-1.png') }}" alt="mercado"></a>
						</div>
						
						@livewire('header-search-component')

						<div class="wrap-icon right-section">
							<div class="wrap-icon-section wishlist">
								<a href="#" class="link-direction">
									<i class="fa fa-heart" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">0 item</span>
										<span class="title">Wishlist</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section minicart">
								<a href="#" class="link-direction">
									<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									<div class="left-info">
										@if(Cart::count() > 0)
										<span class="index">{{ Cart::count() }}</span>
										@endif
										<span class="title">CART</span>										
									</div>
								</a>
							</div>
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
					<div class="header-nav-section">
						<div class="container">
							<ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
								<li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top new items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top Selling</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top rated items</a><span class="nav-label hot-label">hot</span></li>
							</ul>
						</div>
					</div>

					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="{{ url('/') }}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="{{ url('/about-us') }}" class="link-term mercado-item-title">About Us</a>
								</li>
								<li class="menu-item">
									<a href="{{ url('/shop') }}" class="link-term mercado-item-title">Shop</a>
								</li>
								<li class="menu-item">
									<a href="{{ url('/cart') }}" class="link-term mercado-item-title">Cart</a>
								</li>
								<li class="menu-item">
									<a href="{{ url('/addcheck') }}" class="link-term mercado-item-title">Checkout</a>
								</li>
								<li class="menu-item">
									<a href="{{ url('/contact-us') }}" class="link-term mercado-item-title">Contact Us</a>
								</li>																	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
    </header>
    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>login</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            <div class="wrap-address-billing">
                
                <div class="container">
      <div class="row">
        <div class="card">
            <table class="table">
              <thead>
                
                <tr>
                  <th>Order ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Address</th>
                  <th>Country </th>
                  <th>Postcode </th>
                  <th>Town </th>
                  
                </tr>
              </thead>
              <tbody>
              @foreach($checkout_data as $data_check)
                <tr>
                  <td>{{ $data_check->id }}</td>
                  <td>{{ $data_check->first_name }}</td>
                  <td>{{ $data_check->last_name }}</td>
                  <td>{{ $data_check->email }}</td>
                  <td>{{ $data_check->p_num}}</td>
                  <td>{{ $data_check->address }}</td>
                  <td>{{ $data_check->country }}</td>
                  <td>{{ $data_check->postcode }}</td>
                  <td>{{ $data_check->town }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>
            </div>
            
           
            <div class="wrap-show-advance-info-box style-1 box-in-site">
                <!--End wrap-products-->
            </div>

        </div>
        <!--end main content area-->
    </div>
    <!--end container-->

</main>