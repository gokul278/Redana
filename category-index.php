<?php
session_start();
include('./requiredfiles/connectiondb.php');
?>

<!DOCTYPE HTML>
<html lang="en-US">


<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Redana</title>
	<meta name="description" content="Cryptco">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src="assets/js/vendors/jquery-2.1.1.min.js" type="text/javascript"></script>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/images/Redana-logo.png">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- owl-carousel CSS -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css" media="all" /> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- icomoon CSS -->
	<link rel="stylesheet" href="assets/fonts/themability-font.css" type="text/css" media="all" />
	<!-- Main Style CSS -->
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
	<!-- Font -->
	<link
		href="https://fonts.googleapis.com/css2?family=Lobster&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap"
		rel="stylesheet">
	<!-- themability_megamenu css -->
	<link rel="stylesheet" href="assets/css/themability_megamenu.css">
	<!-- javascript -->
	<script src="assets/js/vendors/jquery-2.1.1.min.js" type="text/javascript"></script> 
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
	<header class="">
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
										<button type="button" id="show-themability_megamenu" data-toggle="collapse"
											class="navbar-toggle">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>

									<div class="themability_megamenu-wrapper megamenu_typeheader">

										<span id="remove-themability_megamenu" class="fa fa-times"></span>

										<div class="themability_megamenu-pattern">
											<div class="container">
												<ul class="themability_megamenu" data-megamenuid="55"
													data-transition="slide" data-animationtime="500">

													<li class="home">
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

														<div class="sub-menu sub-menu-1-col"
															style="width: 250px; display: none;">
															<div class="content">
																<div class="row">
																	<div class="col-sm-12">
																		<ul class="route  html-link">
																			<li><a href="#"
																					class="main-menu">About
																					Us</a></li>
																			<li><a href="#"
																					class="main-menu">Contact
																					Us</a>
																			</li>
																			<li><a href="#"
																					class="main-menu">Site
																					Map</a></li>
																			<!-- <li><a href="#"
																					class="main-menu">Special</a></li> -->
																			<li><a href="#"
																					class="main-menu">My
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

					<script>
						$(document).ready(function () {
							$('a[href="#"]').each(function () {
								$(this).parents('.with-sub-menu').addClass('sub-active');
							});

							var current_page = window.location.href;
							$('.themability_megamenu a[href="' + current_page + '"]').each(function () {
								$(this).parents('li').addClass('current-active');

								$(".current-active:first").addClass("active-first");
							});
						});
					</script>
				</div>
				<div class="header-right">
					<div class="search-content">
						<div class="search-btn-outer hidden-lg hidden-md">
							<i class="icon-search"></i>
						</div>
						<div class="header-search">
							<div id="themabilitySearch" class="input-group themability-search">
								<input type="text" name="search" value="" placeholder="Search..."
									class="form-control input-lg ui-autocomplete-input" />
								<span class="btn-search input-group-btn">
									<button type="button" class="btn btn-default btn-lg"><i
											class="search-icon icon-search"></i></button>
								</span>
							</div>
						</div>
					</div>
					<div class="cart-content">
						<div id="cart" class="btn-group btn-block">
							<button type="button" data-toggle="dropdown"
								data-loading-text="<i class='fa fa-spinner fa-spin' aria-hidden='true'></i>"
								class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="icon-bag"></i> <span
									id="cart-total">2<span class="hidden">item(s) - $0.00</span></span></button>
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
					<div id="header_ac" class="dropdown">
						<a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user1"></i><span class="hidden">My Account</span><span
								class="caret hidden"></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-right account-link-toggle">
							<li><a href="Signup.php">Signup</a>
							</li>
							<li><a href="my-account.php">Login</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- .HEADER MENU AREA -->
	<!-- .HEADER MENU AREA -->
	<section></section>
	<!-- Donuts -->
	<div class="blog-section donuts">
		<div class="container">
			<div class="row">
				<aside id="column-left" class="col-sm-3">
					<div class="category-content">
						<div class="box-category">
							<h3 class="toggled relative">Categories</h3>
							<ul class="list-unstyled parent" id="select-category">
								<li class="has-more-category">
									<a href="donuts.php" class="list-group-item main-item">Drink<span
											class="toggled"><i class="fa fa-plus"></i></span>
									</a>
									<ul class="list-unstyled child-categories group">
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; coca-cola</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; sosyo</a>
										</li>
									</ul>
								</li>
								<li class="has-more-category">
									<a href="#" class="list-group-item main-item">salad<span class="toggled"><i
												class="fa fa-plus"></i></span>
									</a>
									<ul class="list-unstyled child-categories group">
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Taco Salad</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Tossed Salad</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Italian Salad</a>
										</li>
									</ul>
								</li>
								<li class="has-more-category">
									<a href="#" class="list-group-item main-item">donuts<span class="toggled"><i
												class="fa fa-plus"></i></span>
									</a>
									<ul class="list-unstyled child-categories group">
										<li>
											<a href="#" class="active" class="list-group-item">&nbsp;&nbsp; Briyani</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Jelly</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Sour Cream</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Sprinkled</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; suop</a>
										</li>
									</ul>
								</li>
								<li class="">
									<a href="#" class="list-group-item ">Pizza<span></span>
									</a>
								</li>
								<li class="">
									<a href="#" class="list-group-item ">french fries<span></span></a>
								</li>
								<li class="">
									<a href="#" class="list-group-item ">hotdog<span></span></a>
								</li>
								<li class="">
									<a href="#" class="list-group-item ">burger<span></span></a>
								</li>
								<li class="has-more-category">
									<a href="#" class="list-group-item main-item">pasta<span class="toggled"><i
												class="fa fa-plus"></i></span>
									</a>
									<ul class="list-unstyled child-categories group">
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Boccoli</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Chifferi</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Corallini</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Fedelini</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Fregula</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Gnocchi</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Lasagna</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Mandala</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Perciatelli</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Piombi</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Puntine</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Rotelle</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Rustiche</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Sachets</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Stelle</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Stortini</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Treccioni</a>
										</li>
										<li>
											<a href="#" class="list-group-item">&nbsp;&nbsp; Ziti</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<script>
						$(function () {
							$(".parent .fa.fa-plus").remove();
							$(".parent .toggled").append("<i class='fa fa-plus'></i>");
							$('.parent .toggled').click(function (e) {
								e.preventDefault();
								if (!$(this).parent().hasClass('active')) {
									$('+ ul', $('a.list-group-item.main-item')).slideUp();
									$('a.list-group-item.main-item').removeClass('active');
								}
								$(this).parent().toggleClass('active');
								$('+ ul', $(this).parent()).slideToggle('slow');
								return false;
							});
						});
					</script>
					<div class="panel panel-default filter">
						<div class="box-content">
							<div id="filter">
								<h3 class="toggled relative">Refine Search</h3>
								<div class="filter_box">
									<div class="list-group">
										<div class="list-group-items">
											
										</div>
										<div class="list-group-items">
											<a class="list-group-item">price</a>
											<div class="list-group-item">
												<div id="filter-group2">
													<div class="checkbox">
														<label>
															<input type="checkbox" name="filter[]" value="3"
																class="form-check-input">
															$49-$149
														</label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox" name="filter[]" value="4"
																class="form-check-input">
															$150-$250
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="list-group-items">
											
										</div>
									</div>
									<div class="panel-footer text-right">
										<button type="button" id="button-filter" class="btn btn-primary">Refine
											Search</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<script type="text/javascript">
						$('#button-filter').on('click', function () {
							filter = [];

							$('input[name^=\'filter\']:checked').each(function (element) {
								filter.push(this.value);
							});

							location = '' + filter.join(',');
						}); //-->
					</script>
					
				</aside>

				
				<div id="content" class="col-sm-9  all-blog">
					<div class="breadcrumb-main">
						<div class="breadcrumb-container clearfix">

							<ul class="breadcrumb">
								<li><a href="index.php">Home</a></li>
								<li><a href="hotel-index.php?item=Briyani"> <?php echo $_GET['item'];?> </a></li>
                                <li><a href="hotel-index.php?item=Briyani"> <?php echo $_GET['name'];?> &nbsp;&nbsp;<img height="22" style="border-radius:50%" src="./vendor/images/<?php echo $_GET['image'];?>"/> </a></li>
                                
							</ul>
						</div>
					</div>

					<div class="row">
						
						<div class="category-desc col-sm-12">
							
						</div>
					</div>
					
					<div class="category-info">
						<div class="row">
							<div class="col-sm-2 col-xs-5 category-list-grid">
								<div class="btn-group btn-group-sm">
									<button type="button" id="grid-view" class="btn btn-default active"
										data-toggle="tooltip" title="" data-original-title="Grid"><i
											class="icon-grid"></i></button>
									<button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip"
										title="" data-original-title="List"><i class="icon-list"></i></button>									
								</div>
								
							</div>
							
							<!-- <div class="col-sm-7 col-xs-12 category-sorting">
								<div class="sort-cat">
									<div class="text-category-sort">
										<label class="input-group-addon" for="input-sort">Sort By:</label>
									</div>
									<div class="select-cat-sort">
										<select id="input-sort" class="form-control" onchange="location = this.value;">
											<option value="#" selected="selected">Default</option>
											<option value="#">
												Name (A - Z)</option>
											<option value="#">
												Name (Z - A)</option>
											<option value="#">
												Price (Low &gt; High)</option>
											<option value="#">
												Price (High &gt; Low)</option>
											<option value="#">
												Rating (Highest)</option>
											<option value="#">
												Rating (Lowest)</option>
											<option value="#">
												Model (A - Z)</option>
											<option value="#">
												Model (Z - A)</option>
										</select>
									</div>
								</div>
								<div class="limit-cat">
									<div class="text-category-limit">
										<label class="input-group-addon" for="input-limit">Show:</label>
									</div>
									<div class="select-cat-limit">
										<select id="input-limit" class="form-control" onchange="location = this.value;">
											<option value="#" selected="selected">9</option>
											<option value="#">
												2</option>
											<option value="#">
												50</option>
											<option value="#">
												75</option>
											<option value="#">
												100</option>
										</select>
									</div>
								</div>
							</div> -->
						</div>
					</div>
					<div class="category-row row">
						<h3 align='center'><?php echo $_GET['item']?></h3>
						<br><br><br>
						<?php
						
						$categorysql = "SELECT  *
                        FROM food_menu
                        JOIN vendorlogin ON food_menu.vendor_id = vendorlogin.vendor_id
                        WHERE food_menu.vendor_id=5735 and food_menu.cuisines Like '%{$_GET['item']}'";
						$categoryres = $con->query($categorysql);

						if($categoryres){
							foreach($categoryres as $categoryrow){
								echo "<div class='product-layout product-list col-xs-12'>
								<div class='product-thumb'>
									<div class='image'>
										<a href='product.php' class='thumb-image'>
											<img src='./vendor/foodimages/{$categoryrow['food_snaps']}' alt='{$categoryrow['name']}' title='{$categoryrow['name']}'
												class='img-responsive'>
										</a>
									</div>
							
									<div class='product-description'>
										<div style='text-align: center;' class='caption'>
											<div class='title-rating clearfix'>
												<h4 class='product-title'><a href='product.php'>{$categoryrow['food_name']}</a>
												</h4>
											</div>
											<div style='text-align: center;' class='price-cartbtn clearfix'>
												<p class='price'>
													₹{$categoryrow['food_cost']}
													
												</p>
												<br>
												<button class='addcart' type='button'><i
														class='icon-shopping-bag hidden'></i>
													<span class=''><a href='##'>Add to Cart</a>
													</span></button>
											</div>
										</div>
									</div>
								</div>
							</div>
							";
							}
						}

						?>
						
					</div>
					<!-- <div class="pagination-main">
						<div class="row">
							<div class="col-sm-6 text-left">Showing 1 to 5 of 5 (1 Pages)</div>
							<div class="col-sm-6 text-right"></div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<!-- .Donuts -->
	<!-- footer -->
	<footer>
		<div  class="container">
			<div class="footer-top">
				<div class="row">
					<div class="col-md-3">
						<div class="position-footer-left">
							<h5 class="toggled title">
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
						<h5 class="toggled">Quick links</h5>
						<ul class="list-unstyled">
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
								<h4>find us on</h4>
								<div class="social-media">
									<a href="#" title="facebook"><i class="fa-brands fa-facebook-f"></i></a>
									<a href="#" title="facebook"><i class="fa-brands fa-twitter"></i></a>
									<a href="#" title="facebook"><i class="fa-brands fa-instagram"></i></a>
									<a href="#" title="facebook"><i class="fa-brands fa-pinterest-p"></i></a>
									<a href="#" title="facebook"><i class="fa-brands fa-youtube"></i></a>
								</div>
							</div>
							<div class="payment-link">
								<h4>payment</h4>
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
	<!-- javascript -->
	<script src="../../cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" type="text/javascript"></script>
	<script type="text/javascript">new WOW().init();</script>
	<link href="../../cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet"/>
	<!-- js -->
	<script src="assets/js/themability_megamenu.js"></script>
	<!-- Main js -->
	<script type="text/javascript" src="assets/js/theme.js"></script>

</body>



</html>