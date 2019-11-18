<html>
	<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
		<title>{{config('app.name')}}</title>
	</head>
	<body>
			<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
					<a class="navbar-brand" href="#">
						<img src="{{asset('img/logo.png')}}" width="30" height="30" class="d-inline-block align-top" />
						Sumber Jaya Store & Fashion Display
					</a>
				<ul class="navbar-nav">
					  <li class="nav-item active,  ml-5">
						<a class="nav-link" href="{{url('/')}}">Home</a>
					  </li>
					  <li class="nav-item active">
						<a class="nav-link" href="{{url('/products')}}">Products</a>
						</li>
						<li class="nav-item active">
						<a class="nav-link" href="{{url('/about')}}">About</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="{{url('/cart')}}">Cart</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="{{url('/account')}}">Account</a>
						</li>
						
				</ul>
				
				<div class="md-form mt-0, ml-5">
					
						<input class="form-control" type="text" placeholder="Search" aria-label="Search">
					  </div>
					  
			</nav>
			
		<div class="container">
			@include('inc.message')
			@yield('content')
		</div>
	</body>
</html>
