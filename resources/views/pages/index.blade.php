
@extends('layouts.visitor')


<div class="super_container">
@section('content')
	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<!-- Home Slider -->
			<div class="home_slider_container">
				<div class="owl-carousel owl-theme home_slider">

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url({{asset('img/s1.jpg')}})"></div>
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col fill_height">
									<div class="home_container d-flex flex-column align-items-center justify-content-start">
										<div class="home_content">
											<div class="home_title">Sumber Jaya</div>
											<div class="home_subtitle">Store and Fashion Display</div>
											<div class="home_items">
												<div class="row">
													<div class="col-sm-3 offset-lg-1">
														<div class="home_item_side"><a href="product.html"><img src="{{asset('img/two.jpg')}}" alt=""></a></div>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
														<div class="product home_item_large">
															<div class="product_tag d-flex flex-column align-items-center justify-content-center">
																<div>
																	<div>from</div>
																	<div>Rp 85<span>k</span></div>
																</div>
															</div>
															<div class="product_image"><img src="{{asset('img/four.jpg')}}" alt=""></div>
															<div class="product_content">
																<div class="product_info d-flex flex-row align-items-start justify-content-start">
																	<div>
																		<div>
																			<div class="product_name"><a href="product.html">Cool Clothing with Brown Stripes</a></div>
																			<div class="product_category">In <a href="category.html">Category</a></div>
																		</div>
																	</div>
																	<div class="ml-auto text-right">
																		<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="product_price text-right">$3<span>.99</span></div>
																	</div>
																</div>
																<div class="product_buttons">
																	<div class="text-right d-flex flex-row align-items-start justify-content-start">
																		<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
																			<div><div><img src="{{asset('img/two.jpg')}}" alt=""><div>+</div></div></div>
																		</div>
																		<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
																			<div><div><img src="{{asset('img/two.jpg')}}" alt=""><div>+</div></div></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="home_item_side"><a href="product.html"><img src="{{asset('img/two.jpg')}}" alt=""></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </div>

                    <!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url({{asset('img/s1.jpg')}})"></div>
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col fill_height">
									<div class="home_container d-flex flex-column align-items-center justify-content-start">
										<div class="home_content">
											<div class="home_title">Hangers</div>
											<div class="home_items">
												<div class="row">
													<div class="col-sm-3 offset-lg-1">
														<div class="home_item_side"><a href="product.html"><img src="{{asset('img/two.jpg')}}" alt=""></a></div>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
														<div class="product home_item_large">
															<div class="product_tag d-flex flex-column align-items-center justify-content-center">
																<div>
																	<div>from</div>
																	<div>Rp 85<span>k</span></div>
																</div>
															</div>
															<div class="product_image"><img src="{{asset('img/four.jpg')}}" alt=""></div>
															<div class="product_content">
																<div class="product_info d-flex flex-row align-items-start justify-content-start">
																	<div>
																		<div>
																			<div class="product_name"><a href="product.html">Cool Clothing with Brown Stripes</a></div>
																			<div class="product_category">In <a href="category.html">Category</a></div>
																		</div>
																	</div>
																	<div class="ml-auto text-right">
																		<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="product_price text-right">$3<span>.99</span></div>
																	</div>
																</div>
																<div class="product_buttons">
																	<div class="text-right d-flex flex-row align-items-start justify-content-start">
																		<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
																			<div><div><img src="{{asset('img/two.jpg')}}" alt=""><div>+</div></div></div>
																		</div>
																		<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
																			<div><div><img src="{{asset('img/two.jpg')}}" alt=""><div>+</div></div></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="home_item_side"><a href="product.html"><img src="{{asset('img/two.jpg')}}" alt=""></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </div>

                    <!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url({{asset('img/s1.jpg')}})"></div>
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col fill_height">
									<div class="home_container d-flex flex-column align-items-center justify-content-start">
										<div class="home_content">
											<div class="home_title">Manekin</div>
											<div class="home_items">
												<div class="row">
													<div class="col-sm-3 offset-lg-1">
														<div class="home_item_side"><a href="product.html"><img src="{{asset('img/two.jpg')}}" alt=""></a></div>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
														<div class="product home_item_large">
															<div class="product_tag d-flex flex-column align-items-center justify-content-center">
																<div>
																	<div>from</div>
																	<div>Rp 85<span>k</span></div>
																</div>
															</div>
															<div class="product_image"><img src="{{asset('img/four.jpg')}}" alt=""></div>
															<div class="product_content">
																<div class="product_info d-flex flex-row align-items-start justify-content-start">
																	<div>
																		<div>
																			<div class="product_name"><a href="product.html">Cool Clothing with Brown Stripes</a></div>
																			<div class="product_category">In <a href="category.html">Category</a></div>
																		</div>
																	</div>
																	<div class="ml-auto text-right">
																		<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="product_price text-right">$3<span>.99</span></div>
																	</div>
																</div>
																<div class="product_buttons">
																	<div class="text-right d-flex flex-row align-items-start justify-content-start">
																		<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
																			<div><div><img src="{{asset('img/two.jpg')}}" alt=""><div>+</div></div></div>
																		</div>
																		<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
																			<div><div><img src="{{asset('img/two.jpg')}}" alt=""><div>+</div></div></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="home_item_side"><a href="product.html"><img src="{{asset('img/two.jpg')}}" alt=""></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </div>

                    <!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url({{asset('img/s1.jpg')}})"></div>
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col fill_height">
									<div class="home_container d-flex flex-column align-items-center justify-content-start">
										<div class="home_content">
											<div class="home_title">Bracket</div>
											<div class="home_items">
												<div class="row">
													<div class="col-sm-3 offset-lg-1">
														<div class="home_item_side"><a href="product.html"><img src="{{asset('img/two.jpg')}}" alt=""></a></div>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
														<div class="product home_item_large">
															<div class="product_tag d-flex flex-column align-items-center justify-content-center">
																<div>
																	<div>from</div>
																	<div>Rp 85<span>k</span></div>
																</div>
															</div>
															<div class="product_image"><img src="{{asset('img/four.jpg')}}" alt=""></div>
															<div class="product_content">
																<div class="product_info d-flex flex-row align-items-start justify-content-start">
																	<div>
																		<div>
																			<div class="product_name"><a href="product.html">Cool Clothing with Brown Stripes</a></div>
																			<div class="product_category">In <a href="category.html">Category</a></div>
																		</div>
																	</div>
																	<div class="ml-auto text-right">
																		<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
																		<div class="product_price text-right">$3<span>.99</span></div>
																	</div>
																</div>
																<div class="product_buttons">
																	<div class="text-right d-flex flex-row align-items-start justify-content-start">
																		<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
																			<div><div><img src="{{asset('img/two.jpg')}}" alt=""><div>+</div></div></div>
																		</div>
																		<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
																			<div><div><img src="{{asset('img/two.jpg')}}" alt=""><div>+</div></div></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="home_item_side"><a href="product.html"><img src="{{asset('img/two.jpg')}}" alt=""></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


				</div>
				<div class="home_slider_nav home_slider_nav_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
				<div class="home_slider_nav home_slider_nav_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>

				<!-- Home Slider Dots -->

				<div class="home_slider_dots_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="home_slider_dots">
									<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-center">
										<li class="home_slider_custom_dot active">01</li>
										<li class="home_slider_custom_dot">02</li>
										<li class="home_slider_custom_dot">03</li>
										<li class="home_slider_custom_dot">04</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Products -->


		<div class="products ml-3">
				<div class="row">
						<div class="col-lg-6 offset-lg-3">
						  <div class="section_title text-center">Lengkapi Toko Anda Sekarang!</div>
						</div>
				</div>

				@if(count($products) > 0)
				@foreach($products as $p)
    				<div class="col-xl-3 col-md-5 mt-3 d-inline-block">
						<div class="product">
							<div class="product_image"><img src="/storage/cover_images/{{$p->cover_image}}" alt=""></div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start ">
									<div>
										<div>
											<div class="product_name" style="color:black">{{$p->name}}</div>
											<div class="product_category"><a href="category.html">
												<a>
													@if ($p->category== 0)
													<p>Bracket</p>
												  @elseif ($p->category == 1)
													<p>Hanger</p>
												  @elseif ($p->category == 2)
													<p>Manekin</p>
												  @elseif ($p->category == 3)
													<p>Rak</p>
												  @else
													<p>Lainnya</p>
												  @endif
												</a>
											</div>
										</div>
									</div>
									<div class="ml-auto text-right">
										<div class="product_price text-right">Rp {{$p->price}}</div>
									</div>
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">

										<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><a href="/add-to-cart/{{$p->id}}"><img src="images/cart.svg" class="svg" alt=""><div></div></div></div></a>
										</div>
										<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><a href="/products/{{$p->id}}"><img src="images/more.svg" class="svg" alt=""></a></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					@else
        				<h5>Nothing here . . </h5>
    			@endif

				</div>
				<div class="row load_more_row">
					<div class="col">
						<div class="button load_more ml-auto mr-auto"><a href="/products">More</a></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Features -->

		<div class="features">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon ml-auto mr-auto"><img src="images/icon_3.svg" alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Kualitas Terjamin</div>
							</div>
						</div>
					</div>

					<!-- Feature -->
					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon ml-auto mr-auto"><img src="images/icon_2.svg" alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Harga Terjangkau</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon ml-auto mr-auto"><img src="images/icon_3.svg" alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Kualitas Terjamin</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>


	</div>

</div>
@endsection
