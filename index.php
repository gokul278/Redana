<?php
include('./requiredfiles/connectiondb.php');
session_start();
?>
<!DOCTYPE HTML>
<html lang="en-US">


<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Redana</title>
	<meta name="description" content="Cryptco">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/images/Redana-logo.png">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- owl-carousel CSS -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css" media="all" />
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- icomoon CSS -->
	<link rel="stylesheet" href="assets/fonts/themability-font.css" type="text/css" media="all">
	<!-- Main Style CSS -->
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css2?family=Lobster&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
	<!--themability_megamenu css-->
	<link rel="stylesheet" href="assets/css/themability_megamenu.css">
</head>

<body class="homepage">
	<div class="loader"></div>
	<!-- HEADER DEFAULT MANU AREA -->
	
				<div id="top-links" class="nav pull-right hidden">
					<ul class="list-inline">
						<li class="hidden">
							<a href="#" id="wishlist-total" title="Wish List (0)">
								<i class="fa fa-heart"></i><span class="hidden-xs hidden-sm hidden-md">Wish List
									(0)</span>
							</a>
						</li>
						<li class="hidden">
							<a href="#" title="Shopping Cart">
								<i class="fa fa-shopping-cart"></i><span class="hidden-xs hidden-sm hidden-md">Shopping
									Cart</span>
							</a>
						</li>
						<li class="hidden">
							<a href="#" title="Checkout">
								<i class="fa fa-share"></i><span class="hidden-xs hidden-sm hidden-md">Checkout</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<header class="home">
		<div class="container">
			<div class="header-inner">
				<div class="header-left">
					<div id="logo">
						<a href="index.php">
							<img style="width: 80px;height: 75px; border-radius: 50%; padding: 5px;" src="assets/images/Redana-logo.png" title="redana" alt="Redana" class="img-responsive">
						</a>
					</div>
				</div>
				<div class="header-center">
					<div class="themability_megamenu-style-dev">
						<div class="responsive themability_default">

							<nav class="navbar-default">
								<div class=" container-themability_megamenu   horizontal ">
									<div class="navbar-header">
										<button type="button" id="show-themability_megamenu" data-toggle="collapse" class="navbar-toggle">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>

									<div class="themability_megamenu-wrapper megamenu_typeheader">

										<span id="remove-themability_megamenu" class="fa fa-times"></span>

										<div class="themability_megamenu-pattern">
											<div class="container">
												<ul class="themability_megamenu" data-megamenuid="55" data-transition="slide" data-animationtime="500">

													<li class="home current-active active-first">
														<a href="index.php">
															<span><strong> Home </strong></span>
														</a>
													</li>

													<li class="with-sub-menu click">
														<p class="close-menu"></p>
														<a href="#" class="clearfix">
															<strong>
																Hotels
															</strong>

															<b class="fa fa-angle-down"></b>
														</a>

														<div class="sub-menu">
															<div class="content">
																<div class="row">
																	<div class="col-sm-12">
																		<div class="categories hot">
																			<div class="row">
																				<div class="col-sm-3 static-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="category.php" class="main-menu">Yummeys</a>
																								<ul>
																									<li><a href="category.php">Briyani</a>
																									</li>
																									<li><a href="category.php">Soup</a>
																									</li>
																									<li><a href="category.php">Veg Masala</a>
																									</li>
																									<li><a href="category.php">Non - Veg Masala</a>
																									</li>
																									<li><a href="category.php">Veg Starters</a>
																									</li>
																									<li><a href="category.php">Non - Veg Starters</a>
																									</li>
																									<li><a href="category.php">Tandoori </a>
																									</li>
																									<li><a href="category.php">Veg - Rice/Noodles</a>
																									</li>
																									<li><a href="category.php">Non - Veg Rice/Noodles</a>
																									</li>
																									<li><a href="category.php">Tiffen</a>
																									</li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-sm-3 static-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="category.php" class="main-menu">Hotel 2</a>
																								<ul>
																									<li><a href="category.php">Briyani</a>
																									</li>
																									<li><a href="category.php">Soup</a>
																									</li>
																									<li><a href="category.php">Veg Masala</a>
																									</li>
																									<li><a href="category.php">Non - Veg Masala</a>
																									</li>
																									<li><a href="category.php">Veg Starters</a>
																									</li>
																									<li><a href="category.php">Non - Veg Starters</a>
																									</li>
																									<li><a href="category.php">Tandoori </a>
																									</li>
																									<li><a href="category.php">Veg - Rice/Noodles</a>
																									</li>
																									<li><a href="category.php">Non - Veg Rice/Noodles</a>
																									</li>
																									<li><a href="category.php">Tiffen</a>
																									</li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-sm-3 static-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="category.php" class="main-menu">Hotel 3</a>
																								<ul>
																									<li><a href="category.php">Briyani</a>
																									</li>
																									<li><a href="category.php">Soup</a>
																									</li>
																									<li><a href="category.php">Veg Masala</a>
																									</li>
																									<li><a href="category.php">Non - Veg Masala</a>
																									</li>
																									<li><a href="category.php">Veg Starters</a>
																									</li>
																									<li><a href="category.php">Non - Veg Starters</a>
																									</li>
																									<li><a href="category.php">Tandoori </a>
																									</li>
																									<li><a href="category.php">Veg - Rice/Noodles</a>
																									</li>
																									<li><a href="category.php">Non - Veg Rice/Noodles</a>
																									</li>
																									<li><a href="category.php">Tiffen</a>
																									</li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-sm-3 static-menu">
																					<div class="menu">
																						<ul>
																							<li><a href="category.php" class="main-menu">Hotel 4</a>
																								<ul>
																									<li><a href="category.php">Briyani</a>
																									</li>
																									<li><a href="category.php">Soup</a>
																									</li>
																									<li><a href="category.php">Veg Masala</a>
																									</li>
																									<li><a href="category.php">Non - Veg Masala</a>
																									</li>
																									<li><a href="category.php">Veg Starters</a>
																									</li>
																									<li><a href="category.php">Non - Veg Starters</a>
																									</li>
																									<li><a href="category.php">Tandoori </a>
																									</li>
																									<li><a href="category.php">Veg - Rice/Noodles</a>
																									</li>
																									<li><a href="category.php">Non - Veg Rice/Noodles</a>
																									</li>
																									<li><a href="category.php">Tiffen</a>
																									</li>
																								</ul>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="border"></div>
																<div  class="row nav-bar-shop-banner">
																	<div class="col-sm-12">
																		<div class="html ">
																			<div class="row">
																				<div  class="col-sm-6">
																					<div class="link">
																						<img src="assets/images/megamenu/1.jpg" alt="" class="img-responsive">
																					</div>
																				</div>
																				<div class="col-sm-6">
																					<div class="link">
																						<img src="assets/images/megamenu/1.jpg" alt="" class="img-responsive">
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													

													<li class="with-sub-menu click">
														<p class="close-menu"></p>
														<a href="#" class="clearfix">
															<strong>
																Pages
															</strong>

															<b class="fa fa-angle-down"></b>
														</a>

														<div class="sub-menu sub-menu-1-col" style="width: 250px; display: none;">
															<div class="content">
																<div class="row">
																	<div class="col-sm-12">
																		<ul class="route  html-link">
																			<li><a href="#" class="main-menu">About
																					Us</a></li>
																			<li><a href="#" class="main-menu">Contact
																					Us</a>
																			</li>
																			
																			<li><a href="#" class="main-menu">Special</a></li>
																			<li><a href="my-account.php" class="main-menu">My
																					Account</a>
																			</li>
																			<li><a href="#" class="main-menu">Order
																					History</a>
																			</li>
																		</ul>

																	</div>
																</div>
															</div>
														</div>
													</li>

													<li class="">
														<p class="close-menu"></p>
														<a href="#" class="clearfix">
															<strong>
																Blog
															</strong>

														</a>

													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</nav>
						</div>
					</div>

				</div>
				<div class="header-right">
					<!-- <div class="search-content">
						<div class="search-btn-outer hidden-lg hidden-md">
							<i class="icon-search"></i>
						</div>
						<div class="header-search">
							<div id="themabilitySearch" class="input-group themability-search">
								<input type="text" name="search" value="" placeholder="Search..." class="form-control input-lg ui-autocomplete-input" />
								<span class="btn-search input-group-btn">
									<button type="button" class="btn btn-default btn-lg"><i class="search-icon icon-search"></i></button>
								</span>
							</div>
						</div>
					</div> -->


					<?php
                        if(isset($_SESSION["customer_id"])){
                    ?> 


					<div class="cart-content">
						<div id="cart" class="btn-group btn-block">
							<button type="button" data-toggle="dropdown" data-loading-text="<i class='fa fa-spinner fa-spin' aria-hidden='true'></i>" class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="icon-bag"></i> <span id="cart-total">0<span class="hidden">item(s) - $0.00</span></span></button>
							<ul class="dropdown-menu pull-right header-cart-toggle">
								<li class="cart-content-product">
									<table class="table table-striped">
										<tbody>
											<tr>
												<td class="text-center product-cart-thumb">
													<a href="#">
														<img src="assets/images/hotels/briyani/empty briyani.png" alt="veggie delight" title="veggie delight" class="img-thumbnail">
													</a>
												</td>
												<td class="text-left product-cart-details">
													<a href="#" class="product-item-name">Empty Briyani</a>
													<br>
													<div class="product-cart-info">
														<span class="product-cart-qty">1 x </span>
														<span class="product-cart-price">₹80.00</span>
													</div>
												</td>
												<td class="text-center product-cart-close">
													<button type="button" title="Remove" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button>
												</td>
											</tr>
											<tr>
												<td class="text-center product-cart-thumb">
													<a href="#">
														<img src="assets/images/hotels/briyani/chicken briyani.png" alt="PeppiPizza" title="PeppiPizza" class="img-thumbnail">
													</a>
												</td>
												<td class="text-left product-cart-details">
													<a href="#" class="product-item-name">Chicken Briyani</a>
													<div class="product-cart-info">
														<span class="product-cart-qty">1 x </span>
														<span class="product-cart-price">₹100.100</span>
													</div>
												</td>
												<td class="text-center product-cart-close">
													<button type="button" title="Remove" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button>
												</td>
											</tr>
										</tbody>
									</table>
								</li>
								<li>
									<div>
										<table class="table table-bordered">
											<tbody>
												<tr>
													<td class="text-left"><strong>Sub-Total</strong></td>
													<td class="text-right">₹180.00</td>
												</tr>
												<tr>
													<td class="text-left"><strong>SGST (2%)</strong></td>
													<td class="text-right">₹10.00</td>
												</tr>
												<tr>
													<td class="text-left"><strong>VAT (2%)</strong></td>
													<td class="text-right">₹10.00</td>
												</tr>
												<tr>
													<td class="text-left"><strong>Total</strong></td>
													<td class="text-right">₹200.00</td>
												</tr>
											</tbody>
										</table>
										<p class="text-right product-cart-button">
											<a href="shopping-cart.php" class="btn cart-btn addtocart-btn"><i class="fa fa-shopping-cart hidden"></i>View Cart</a>
											&nbsp;&nbsp;&nbsp;<a href="shopping-cart.php" class="btn cart-btn checkout-btn"><i class="fa fa-share hidden"></i>Checkout</a>
										</p>
									</div>
								</li>
							</ul>
						</div>
					</div>


					<?php
					}else{
					?>

					<div class="cart-content">
						<div id="cart" class="btn-group btn-block">
							<button type="button" data-toggle="dropdown" data-loading-text="<i class='fa fa-spinner fa-spin' aria-hidden='true'></i>" class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="icon-bag"></i> <span id="cart-total">!<span class="hidden">item(s) - $0.00</span></span></button>
							<ul class="dropdown-menu pull-right header-cart-toggle">
								<li>
									<br>
									<div>
										<p class="text-right product-cart-button">
											<a href="Signup.php" class="btn cart-btn addtocart-btn"><i class="fa fa-shopping-cart hidden"></i> Sign Up </a>
											&nbsp;&nbsp;&nbsp;<a href="my-account.php" class="btn cart-btn checkout-btn"><i class="fa fa-share hidden"></i> Login </a>
										</p>
										<p style="color:red" align="center">to continue</p>
										<br>
									</div>
								</li>
							</ul>
						</div>
					</div>

					<?php
					}?>

					<div id="header_ac" class="dropdown">
						<?php
                            if(isset($_SESSION["customer_id"])){
                        ?>   
                        <a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown" align="center">
                            <i class="icon-user1"></i><span>Hi!, <?php echo $_SESSION["customer_firstname"].' '.$_SESSION["customer_lastname"]; ?></span><span
                                class="caret hidden"></span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right account-link-toggle">
                            <li><a href="my-account.php">My Account</a></li>
							<li><a href="logout.php">Logout</a></li>
                        </ul>

                        <?php
                            }else{
                        ?> 

						<a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user1"></i><span class="hidden">My Account</span><span
                                class="caret hidden"></span>
                        </a>
                        
                        <ul class="dropdown-menu dropdown-menu-right account-link-toggle">
                            <li><a href="Signup.php">Signup</a></li>
							<li><a href="my-account.php">Login</a></li>
                        </ul>

                        <?php
                            }
                        ?>
					</div>
				</div>
			</div>
		</div>

	</header>

	<!-- .HEADER MENU AREA -->
	<!-- Banner -->


	<div class="container-full ">

		<div class="themability-banner box-module ">
			<div class="block_box">
				<div>
					<div class="banner-owl-carousel owl-carousel owl-theme owl-loaded owl-drag">
						<div class="row-items category-layout col-xs-12">
							<div class="themability-banner-image">
								<img src="assets/images/banners/mainbanner2.jpg" alt="Noelle Salar" class=" img-responsive ">
							</div>
						</div>
						<div class="row-items category-layout col-xs-12">
							<div class="themability-banner-image">
								<img src="assets/images/banners/mainbanner1.png" alt="Noelle Salar" class=" img-responsive ">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<!-- .Banner -->
	<!-- foor Free -->
	
	<!-- .foor Free -->
	<!-- Top PRODUCT  -->
	<div class="product-tab-block wow fadeInUp top-margin-all">
		<div class="container">
			<div class="main-tab">
				<div class="product-tabs box-content clearfix">
					<div class="page-title toggled">
						<h3>What's on your mind?</h3>
					</div>
					<div id="tabs_1" class="themability-tabs section">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							
						</ul>
					</div>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="latest" role="tabpanel" aria-labelledby="latest-tab">
							<div class="block_box">
								<div class="row">
									<div class="category-box">
										<div class="category-feature-list ">
											<div class="top-latest owl-carousel">
												<div class="single-column">
													<div class="product-layout col-xs-12">
														<div class="product-thumb transition">
															<div class="image">
																<a href="hotel-index.php?item=Briyani" class="thumb-image">
																	<img src="assets/images/categories/briyani_logo.png" alt="Briyani" title="Briyani" class="img-responsive">
																</a>
																
															</div>
															<div class="product-description">
																<div style="text-align: center;" class="caption">
																	<div class="title-rating clearfix">
																		<h4 class="product-title"><a  href="hotel-index.php"><b>Briyani</b></a>
																		</h4>
																		
																	</div>
																	<div  class="price-cartbtn clearfix">
																		
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="product-layout col-xs-12">
														<div class="product-thumb transition">
															<div class="image">
																<a href="hotel-index.php?item=Veg Masala" class="thumb-image">
																	<img src="assets/images/categories/veg-masala.png" alt="Veg Masala" title="Veg Masala" class="img-responsive">
																</a>
																
															</div>
															<div class="product-description">
																<div style="text-align: center;" class="caption">
																	<div class="title-rating clearfix">
																		<h4 class="product-title"><a href="hotel-index.php"><b>Veg Masala</b></a></h4>
																		
																	</div>
																	<div class="price-cartbtn clearfix">
																		
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="single-column">
													<div class="product-layout col-xs-12">
														<div class="product-thumb transition">
															<div class="image">
																<a href="hotel-index.php?item=Soup" class="thumb-image">
																	<img src="assets/images/categories/soup_png.png" alt="Soups" title="Soups" class="img-responsive">
																</a>
																
															</div>
															<div class="product-description">
																<div style="text-align: center;" class="caption">
																	<div class="title-rating clearfix">
																		<h4 class="product-title"><a href="hotel-index.php"><b>Soup</b></a></h4>
																		
																	</div>
																	<div class="price-cartbtn clearfix">
																		
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="product-layout col-xs-12">
														<div class="product-thumb transition">
															<div class="image">
																<a href="hotel-index.php?item=Non Veg Masala" class="thumb-image">
																	<img src="assets/images/categories/non-veg masala.png" alt="Non-Veg Masala" title="Non Veg Masala" class="img-responsive">
																</a>
																
															</div>
															<div class="product-description">
																<div style="text-align: center;" class="caption">
																	<div class="title-rating clearfix">
																		<h4 class="product-title"><a href="hotel-index.php"><b>Non Veg Masala</b></a></h4>
																		
																	</div>
																	<div class="price-cartbtn clearfix">
																		
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="single-column">
													<div class="product-layout col-xs-12">
														<div class="product-thumb transition">
															<div class="image">
																<a href="hotel-index.php?item=Non Veg Starter" class="thumb-image">
																	<img src="assets/images/categories/non-veg_starters.png" alt="Non Veg Starters" title="Non Veg Starters" class="img-responsive">
																</a>
																<!-- <div class="button-group">
																	<button class="wishlist" type="button" data-toggle="tooltip" data-original-title="Add to wishlist"><i class="icon-like"></i></button>
																	<button class="compare" type="button" data-toggle="tooltip" data-original-title="Compare"><i class="icon-shuffle-arrows"></i></button>
																	<button class="themability_quickview-button" type="button" data-toggle="tooltip" title="" data-original-title="Quickview"><i class="icon-eye"></i></button>
																</div> -->
															</div>
															<div class="product-description">
																<div style="text-align: center;" class="caption">
																	<div class="title-rating clearfix">
																		<h4 class="product-title"><a href="hotel-index.php"><b>Non Veg Starter</b></a></h4>
																		<!-- <div class="rating">
																			<span class="fa fa-stack"><i class="fa-regular fa-star"></i></span>
																			<span class="fa fa-stack"><i class="fa-regular fa-star"></i></span>
																			<span class="fa fa-stack"><i class="fa-regular fa-star"></i></span>
																			<span class="fa fa-stack"><i class="fa-regular fa-star"></i></span>
																			<span class="fa fa-stack"><i class="fa-regular fa-star"></i></span>
																		</div> -->
																	</div>
																	<div class="price-cartbtn clearfix">
																		<!-- <p class="price">
																			$2,000.00
																			<span class="price-tax">Without tax:
																				$2,000.00</span>
																		</p>
																		<p class="description">
																			Latest Intel mobile architecture
																			Powered by the most advanced mobile
																			processors from Intel, the new Core 2 Duo
																			MacBook Pro is over 50% faster than the
																			original Core Duo MacBook Pro and now
																			supports up to 4GB of RAM.
																			Leadin..</p> -->
																		<!-- <button class="addcart" type="button" title="Order Now"><i class="icon-shopping-bag hidden"></i><span class="">Order Now</span></button> -->
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="product-layout col-xs-12">
														<div class="product-thumb transition">
															<div class="image">
																<a href="hotel-index.php?item=Veg Starter" class="thumb-image">
																	<img src="assets/images/categories/veg-starters.png" alt="Veg Starters" title="Veg Starters" class="img-responsive">
																</a>
																<!-- <div class="button-group">
																	<button class="wishlist" type="button" data-toggle="tooltip" data-original-title="Add to wishlist"><i class="icon-like"></i></button>
																	<button class="compare" type="button" data-toggle="tooltip" data-original-title="Compare"><i class="icon-shuffle-arrows"></i></button>
																	<button class="themability_quickview-button" type="button" data-toggle="tooltip" title="" data-original-title="Quickview"><i class="icon-eye"></i></button>
																</div> -->
															</div>
															<div class="product-description">
																<div style="text-align: center;" class="caption">
																	<div class="title-rating clearfix">
																		<h4 class="product-title"><a href="hotel-index.php"><b>Veg Starter</b></a>
																		</h4>
																		<!-- <div class="rating">
																			<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																			<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																			<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																			<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																			<span class="fa fa-stack"><i class="fa-regular fa-star"></i></span>
																		</div> -->
																	</div>
																	<div class="price-cartbtn clearfix">
																		<!-- <p class="price">
																			$1,202.00
																			<span class="price-tax">Without tax:
																				$1,000.00</span>
																		</p>
																		<p class="description">
																			MacBook Air is ultrathin, ultraportable, and
																			ultra unlike anything else. But you don’t
																			lose inches and pounds overnight. It’s the
																			result of rethinking conventions. Of
																			multiple wireless innovations. And of
																			breakthrough design. With MacB..</p>
																		<button class="addcart" type="button" title="Order Now"><i class="icon-shopping-bag hidden"></i><span class=""><a href="shopping-cart.php">Order
																					Now</a></span></button> -->
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="single-column ">
													<div class="product-layout col-xs-12">
														<div class="product-thumb transition">
															<div class="image">
																<a href="hotel-index.php?item=Tandoori" class="thumb-image">
																	<img src="assets/images/categories/Tandoori.png" alt="Tandoori" title="Tandoori" class="img-responsive">
																</a>
																
															</div>
															<div class="product-description">
																<div style="text-align: center;" class="caption">
																	<div class="title-rating clearfix">
																		<h4 class="product-title"><a href="hotel-index.php"><b>Tandoori</b></a></h4>
																		
																	</div>
																	<div class="price-cartbtn clearfix">
																		
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="product-layout col-xs-12">
														<div class="product-thumb transition">
															<div class="image">
																<a href="hotel-index.php?item=Veg Rice" class="thumb-image">
																	<img src="assets/images/categories/veg_noodles.png" alt="veg Rice/Noodles" title="Veg Rice/Noodles" class="img-responsive">
																</a>
																
															</div>
															<div class="product-description">
																<div style="text-align: center;" class="caption">
																	<div class="title-rating clearfix">
																		<h4 class="product-title"><a href="hotel-index.php"><b>Veg Rice</b></a></h4>
																		
																	</div>
																	<div class="price-cartbtn clearfix">
																		
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="single-column">
													<div class="product-layout col-xs-12">
														<div class="product-thumb transition">
															<div class="image">
																<a href="hotel-index.php?item=Non Veg Rice" class="thumb-image">
																	<img src="assets/images/categories/non-veg rice.png" alt="Non-Veg Rice/Noodles" title="Non-Veg Rice/Noodles" class="img-responsive">
																</a>
																
															</div>
															<div class="product-description">
																<div style="text-align: center;" class="caption">
																	<div class="title-rating clearfix">
																		<h4 class="product-title"><a href="hotel-index.php"><b>Non Veg Rice</b></a></h4>
																		
																	</div>
																	<div class="price-cartbtn clearfix">
																		
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="product-layout col-xs-12">
														<div class="product-thumb transition">
															<div class="image">
																<a href="hotel-index.php?item=Tiffen" class="thumb-image">
																	<img src="assets/images/categories/tiffen.png" alt="tiffen" title="tiffen" class="img-responsive">
																</a>
																
															</div>
															<div class="product-description">
																<div style="text-align: center;" class="caption">
																	<div class="title-rating clearfix">
																		<h4 class="product-title"><a href="hotel-index.php"><b>Tiffen</b></a></h4>
																		
																	</div>
																	<div class="price-cartbtn clearfix">
																		
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
		</div>
	</div>
	</div>

	<!-- .Top PRODUCT  -->

	<!-- VEGGIE FUN  DELICIOUS SUMMER! -->

	<div class="html2  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
		<div class="banner3">
			<div class="pizza1"></div>
			
			<div class="inner1">
				<div class="banner-desc">VEGGIE FUN <br>DELICIOUS SUMMER!</div> <a href="shopping-cart.php" class="btn-default">Order
					Now</a>
			</div>
			<div class="pizza2"></div>
		</div>
	</div>
	<!-- .VEGGIE FUN  DELICIOUS SUMMER! -->

	

	
	<!-- CATEGORIES -->
	<div class="top-margin-all category-featured wow fadeInUp ">
		<div class="container">
			<div class="page-title toggled">
				<h3>HOTELS</h3>
			</div>
			<div class="block_box">
				<div class="row">
					<div class="category-box">
						<div class="category-feature-list ">
							<div class="category-carousel owl-carousel owl-theme">
								<?php
								$hotelsql = "SELECT * FROM vendorlogin ORDER BY vendor_id ASC";
								$hotelres = $con->query($hotelsql);

								foreach($hotelres as $hotelrow){
									echo "<div class='category-layout col-xs-12'>
									<div class='category-thumb'>
										<div class='images-hover image'>
										<a href='category.php?vendor_id={$hotelrow['vendor_id']}&name={$hotelrow['name']}'>
												<img src='./vendor/images/{$hotelrow['image']}' alt='{$hotelrow['name']}' title='{$hotelrow['name']}' class='img-responsive'>
											</a>
										</div>
										<div class='caption'>
											<div class='cat-title'>
												<h4><a href='#'>{$hotelrow['name']}</a>
												</h4>
											</div>
											<div class='cat-sub hidden'>
											</div>
										</div>
									</div>
								</div>";
								}
								?>
								<!-- <div class="category-layout col-xs-12">
									<div class="category-thumb">
										<div class="images-hover image">
											<a href="category.php">
												<img src="assets/images/categories/hotel.png" alt="hotel 1" title="hotel 1" class="img-responsive">
											</a>
										</div>
										<div class="caption">
											<div class="cat-title">
												<h4><a href="#">Yummeys</a>
												</h4>
											</div>
											<div class="cat-sub hidden">
											</div>
										</div>
									</div>
								</div>
								<div class="category-layout col-xs-12">
									<div class="category-thumb">
										<div class="images-hover image">
											<a href="category.php">
												<img src="assets/images/categories/hotel.png" alt="hotel 2" title="hotel 2" class="img-responsive">
											</a>
										</div>
										<div class="caption">
											<div class="cat-title">
												<h4><a href="#">Hotel 2</a>
												</h4>
											</div>
											<div class="cat-sub hidden">
											</div>
										</div>
									</div>
								</div>
								<div class="category-layout col-xs-12">
									<div class="category-thumb">
										<div class="images-hover image">
											<a href="category.php">
												<img src="assets/images/categories/hotel.png" alt="hotel 3" title="hotel 3" class="img-responsive">
											</a>
										</div>
										<div class="caption">
											<div class="cat-title">
												<h4><a href="#">Hotel 3</a>
												</h4>
											</div>
											<div class="cat-sub hidden">
											</div>
										</div>
									</div>
								</div>
								<div class="category-layout col-xs-12">
									<div class="category-thumb">
										<div class="images-hover image">
											<a href="category.php">
												<img src="assets/images/categories/hotel.png" alt="hotel 4" title="hotel 4" class="img-responsive">
											</a>
										</div>
										<div class="caption">
											<div class="cat-title">
												<h4><a href="#">Hotel 4</a>
												</h4>
											</div>
											<div class="cat-sub hidden">
											</div>
										</div>
									</div>
								</div>
								<div class="category-layout col-xs-12">
									<div class="category-thumb">
										<div class="images-hover image">
											<a href="category.php">
												<img src="assets/images/categories/hotel.png" alt="hotel 5" title="hotel 5" class="img-responsive">
											</a>
										</div>
										<div class="caption">
											<div class="cat-title">
												<h4><a href="#">Hotel 5</a>
												</h4>
											</div>
											<div class="cat-sub hidden">
											</div>
										</div>
									</div>
								</div>
								<div class="category-layout col-xs-12">
									<div class="category-thumb">
										<div class="images-hover image">
											<a href="category.php">
												<img src="assets/images/categories/hotel.png" alt="hotel 6" title="hotel 6" class="img-responsive">
											</a>
										</div>
										<div class="caption">
											<div class="cat-title">
												<h4><a href="#">Hotel 6</a>
												</h4>
											</div>
											<div class="cat-sub hidden">
											</div>
										</div>
									</div>
								</div>
								<div class="category-layout col-xs-12">
									<div class="category-thumb">
										<div class="images-hover image">
											<a href="category.php">
												<img src="assets/images/categories/hotel.png" alt="hotel 7" title="hotel 7" class="img-responsive">
											</a>
										</div>
										<div class="caption">
											<div class="cat-title">
												<h4><a href="#">Hotel 7</a>
												</h4>
											</div>
											<div class="cat-sub hidden">
											</div>
										</div>
									</div>
								</div>
								<div class="category-layout col-xs-12">
									<div class="category-thumb">
										<div class="images-hover image">
											<a href="category.php">
												<img src="assets/images/categories/hotel.png" alt="hotel 8" title="hotel 8" class="img-responsive">
											</a>
										</div>
										<div class="caption">
											<div class="cat-title">
												<h4><a href="#">Hotel 8</a>
												</h4>
											</div>
											<div class="cat-sub hidden">
											</div>
										</div>
									</div>
								</div>
								<div class="category-layout col-xs-12">
									<div class="category-thumb">
										<div class="images-hover image">
											<a href="category.php">
												<img src="assets/images/categories/hotel.png" alt="hotel 9" title="hotel 9" class="img-responsive">
											</a>
										</div>
										<div class="caption">
											<div class="cat-title">
												<h4><a href="#">Hotel 9</a>
												</h4>
											</div>
											<div class="cat-sub hidden">
											</div>
										</div>
									</div>
								</div>
								<div class="category-layout col-xs-12">
									<div class="category-thumb">
										<div class="images-hover image">
											<a href="category.php">
												<img src="assets/images/categories/hotel.png" alt="hotel 10" title="hotel 10" class="img-responsive">
											</a>
										</div>
										<div class="caption">
											<div class="cat-title">
												<h4><a href="#">Hotel 10</a>
												</h4>
											</div>
											<div class="cat-sub hidden">
											</div>
										</div>
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- .CATEGORIES -->

	<!-- Banner -->
	

	<!-- . company brand -->
	<!-- footer -->
	<footer>
		<div  class="container">
			<div class="footer-top">
				<div class="row">
					<div class="col-md-3">
						<div class="position-footer-left">
							<h5 style="color: white;" class="toggled title">
								contact
								
							</h5>
							<ul class="list-unstyled">
								<li>
									<div class="site">
										<div class="contact_title"><i class="fa-solid fa-location-dot"></i></div>
										<div class="contact_site">Erode</div>
									</div>
								</li>
								<li>
									<div class="phone">
										<div class="contact_title"><i class="fa fa-phone"></i></div>
										<div class="contact_site">1234567890</div>
									</div>
								</li>
								<li>
									<div class="fax">
										<div class="contact_title"><i class="fa fa-fax"></i></div>
										<div class="contact_site">123456789</div>
									</div>
								</li>
								<li>
									<div class="email">
										<div class="contact_title"><i class="fa fa-envelope"></i></div>
										<div class="contact_site"><a href="mailto:#.com" class="contact_site">demo@redana.com</a></div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					
					<div class="col-md-3">
						<h5 style="color: white;" class="toggled">Quick links</h5>
						<ul class="list-unstyled">htmlhtml
							<li><a href="index.php" class="contact_site">Home</a></li>
							<li><a href="#" class="contact_site">About
									Us</a></li>
							<li><a href="#" class="contact_site">Contact
									Us</a></li>
							<li><a href="#" class="contact_site">Shop</a></li>
							<li><a href="#">Terms & Conditions</a></li>
						</ul>
					</div>
					
					<div class="col-md-3">
						<div class="position-footer-right">
							<div class="follow-link">
								<h4 style="color: white;">find us on</h4>
								<div class="social-media">
									<a href="#" title="facebook"><i class="fa-brands fa-facebook-f"></i></a>
									<a href="#" title="facebook"><i class="fa-brands fa-twitter"></i></a>
									<a href="#" title="facebook"><i class="fa-brands fa-instagram"></i></a>
									<a href="#" title="facebook"><i class="fa-brands fa-pinterest-p"></i></a>
									<a href="#" title="facebook"><i class="fa-brands fa-youtube"></i></a>
								</div>
							</div>
							<div class="payment-link">
								<h4 style="color: white;">payment</h4>
								<div class="payment-method">
									<a><i class="fa-brands fa-cc-visa"></i></a>
									<a><i class="fa fa-credit-card"></i></a>
									<a><i class="fa-brands fa-cc-mastercard"></i></a>
									<a><i class="fa-brands fa-cc-paypal"></i></a>
									<a><i class="fa-brands fa-cc-discover"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <hr> -->
			<p class="copyright"><a href="#"></a>© 2023 Redana - All Rights Reserved.<br><br><a href="http://cragx.rf.gd" target="_blank" ><b>Design & Developed by CragX</b></a></p>
		</div>
	</footer>

	<a class="scrollToTop back-to-top" href="#" data-toggle="tooltip" title="" data-original-title="Top"><i class="fa fa-angle-up"></i></a>

	<!-- .footer -->

	<script src="assets/js/vendors/jquery-2.1.1.min.js" type="text/javascript"></script>

	<!-- bootstrap js -->
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<!-- owl-carousel js -->
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
	<!-- js -->
	<script src="assets/js/themability_megamenu.js"></script>

	<!-- wow javascript -->

	<script src="../../cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" type="text/javascript"></script>
	<script type="text/javascript">new WOW().init();</script>
	<link href="../../cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet" />
	<!-- Main js -->
	<script type="text/javascript" src="assets/js/theme.js"></script>



</body>
<script src="./js/index.js"></script>


</html>