<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
		
	<title>{{config('app.name')}}</title>
		
	<title>{{config('app.name')}}</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Sumber Jaya">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap-4.1.2/bootstrap.min.css')}}">
		<link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">
	</head>
<body>

<!-- Header -->

<header class="header">
  <div class="header_overlay"></div>
  <div class="header_content d-flex flex-row align-items-center justify-content-start">
   <div class="logo">
    <a href="#">
     <div class="d-flex flex-row align-items-center justify-content-start">
      <div><img src="{{asset('img/logo.png')}}" alt=""  width="30" height="30"></div>
      <div>Sumber Jaya</div>
     </div>
    </a> 
   </div>
   <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
   <nav class="main_nav">
    <ul class="d-flex flex-row align-items-start justify-content-start">
     <li class="active"> <a href="{{url('/')}}">Home</a></li>
			<li><a href="{{url('/products')}}">Products</a></li>
			<li><a href="{{url('/about')}}">About</a></li>
			<li><a href="{{url('/cart')}}">Cart</a></li>
			<li><a href="{{url('/admin/')}}">Admin</a></li>
    </ul>
   </nav>
   <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
    <!-- Search -->
    <div class="header_search">
     <form action="#" id="header_search_form">
      <input type="text" class="search_input" placeholder="Search Item" required="required">
      <button class="header_search_button"><img src="images/search.png" alt=""></button>
     </form>
    </div>
    <!-- User -->
    <div class="user"><a href="#"><div><img src="images/user.svg" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a></div>
    <!-- Cart -->
    <div class="cart"><a href="cart.html"><div><img class="svg" src="images/cart.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
    <!-- Phone -->
    <div class="header_phone d-flex flex-row align-items-center justify-content-start">
     <div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
     <div>0877 -061 - 0777</div>
    </div>
   </div>
  </div>
 </header>


<!-- Menu -->

<div class="menu">
	<!-- Search -->
	<div class="menu_search">
		<form action="#" id="menu_search_form" class="menu_search_form">
			<input type="text" class="search_input" placeholder="Search Item" required="required">
			<button class="menu_search_button"><img src="images/search.png" alt=""></button>
		</form>
	</div>
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
			<li><a href="{{url('/')}}">Home</a></li>
			<li><a href="{{url('/products')}}">Products</a></li>
			<li><a href="{{url('/about')}}">About</a></li>
			<li><a href="{{url('/cart')}}">Cart</a></li>
			<li><a href="{{url('/admin')}}">Admin</a></li>
		</ul>
	</div>
	<!-- Contact Info -->
	<div class="menu_contact">

		<div class="menu_social">
			<ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
				<li><a href="https:instagram.com/pusat.display"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="https:wa.me/6287702610777"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>



@yield('content')
	


<!-- Footer -->

<footer class="footer">
			<div class="footer_content">
				<div class="container">
					<div class="row">
						
						<!-- About -->
						<div class="col-lg-8 footer_col">
							<div class="footer_about">
								<div class="footer_logo">
									<a href="#">
										<div class="d-flex flex-row align-items-center justify-content-start">
											<div class="footer_logo_icon"><img src="{{asset('img/logo.png')}}"  width="30" height="30" alt=""></div>
											<div>Sumber Jaya</div>
										</div>
									</a>		
								</div>
								<div class="footer_about_text">
									<p>
                                        Kami menyediakan berbagai macam kebutuhan display toko mulai dari manekin, 
                                        hanger, gawang baju, tiang bracket, sticker kaca, ram, rak minimarket, 
                                        cantolan, keranjang snack dan masih banyak lagi.
                                        Kunjungi toko kami, Jl. Diponegoro 46 Mojosari.
                                    </p>
								</div>
							</div>
                        </div>
                        


						
					</div>
				</div>
			</div>
			<div class="footer_bar">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
								<div class="copyright order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> &copy; 2019 | Sumber Jaya Store and Fashion Display</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>

	</body>
</html>
