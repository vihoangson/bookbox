<!-- Header Section Starts -->
<header id="header-area">
    <!-- Header Top Starts -->
    <div class="header-top">
        <div class="container">
            <!-- Header Links Starts -->
            <div class="col-sm-8 col-xs-12">
                <div class="header-links">
                    <ul class="nav navbar-nav pull-left">
                        <li>
                            <a href="/">
                                <i class="fa fa-home" title="Home"></i>
                                <span class="hidden-sm hidden-xs">
												Home
											</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-heart" title="Wish List"></i>
                                <span class="hidden-sm hidden-xs">
												Wish List(0)
											</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-user" title="My Account"></i>
                                <span class="hidden-sm hidden-xs">
												My Account
											</span>
                            </a>
                        </li>
                        <li>
                            <a href="cart.html">
                                <i class="fa fa-shopping-cart" title="Shopping Cart"></i>
                                <span class="hidden-sm hidden-xs">
												Shopping Cart
											</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-crosshairs" title="Checkout"></i>
                                <span class="hidden-sm hidden-xs">
												Checkout
											</span>
                            </a>
                        </li>
                        <li>
                            <a href="register.html">
                                <i class="fa fa-unlock" title="Register"></i>
                                <span class="hidden-sm hidden-xs">
												Register
											</span>
                            </a>
                        </li>
                        <li>
                            <a href="/wp-admin">
                                <i class="fa fa-lock" title="Login"></i>
                                <span class="hidden-sm hidden-xs">
												Login
											</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header Links Ends -->
            <!-- Currency & Languages Starts -->
            <div class="col-sm-4 col-xs-12">
                <div class="pull-right">
                    <!-- Currency Starts -->
                    <div class="btn-group">
                        <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                            Currency
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <ul class="pull-right dropdown-menu">
                            <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>#">Pound </a></li>
                            <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>#">US Dollar</a></li>
                            <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>#">Euro</a></li>
                        </ul>
                    </div>
                    <!-- Currency Ends -->
                    <!-- Languages Starts -->
                    <div class="btn-group">
                        <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                            Language
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <ul class="pull-right dropdown-menu">
                            <li>
                                <a tabindex="-1" href="<?= get_template_new_directory(); ?>#">English</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="<?= get_template_new_directory(); ?>#">French</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Languages Ends -->
                </div>
            </div>
            <!-- Currency & Languages Ends -->
        </div>
    </div>
    <!-- Header Top Ends -->
    <!-- Starts -->
    <div class="container">
        <!-- Main Header Starts -->
        <div class="main-header">
            <div class="row">
                <!-- Logo Starts -->
                <div class="col-md-6">
                    <div id="logo">
                        <a href="/"><img src="<?= get_template_new_directory() ?>images/logo.png" title="Spice Shoppe" alt="Spice Shoppe" class="img-responsive" /></a>
                    </div>
                </div>
                <!-- Logo Starts -->
                <!-- Search Starts -->
                <div class="col-md-3">
                    <div id="search" class="hidden">
                        <div class="input-group">
                            <input type="text" class="form-control input-lg" placeholder="Search">
                            <span class="input-group-btn">
									<button class="btn btn-lg" type="button">
										<i class="fa fa-search"></i>
									</button>
								  </span>
                        </div>
                    </div>
                </div>
                <!-- Search Ends -->
                <!-- Shopping Cart Starts -->
                <div class="col-md-3">
                    <div id="cart" class="btn-group btn-block hidden">
                        <button type="button" data-toggle="dropdown" class="btn btn-block btn-lg dropdown-toggle">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="hidden-md">Cart:</span>
                            <span id="cart-total">2 item(s) - $340.00</span>
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <table class="table hcart">
                                    <tr>
                                        <td class="text-center">
                                            <a href="product.html">
                                                <img src="= get_template_new_directory() ?>images/product-images/hcart-thumb1.jpg" alt="image" title="image" class="img-thumbnail img-responsive" />
                                            </a>
                                        </td>
                                        <td class="text-left">
                                            <a href="product-full.html">
                                                Seeds
                                            </a>
                                        </td>
                                        <td class="text-right">x 1</td>
                                        <td class="text-right">$120.68</td>
                                        <td class="text-center">
                                            <a href="#">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <a href="product.html">
                                                <img src="= get_template_new_directory() ?>images/product-images/hcart-thumb2.jpg" alt="image" title="image" class="img-thumbnail img-responsive" />
                                            </a>
                                        </td>
                                        <td class="text-left">
                                            <a href="product-full.html">
                                                Organic
                                            </a>
                                        </td>
                                        <td class="text-right">x 2</td>
                                        <td class="text-right">$240.00</td>
                                        <td class="text-center">
                                            <a href="#">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </li>
                            <li>
                                <table class="table table-bordered total">
                                    <tbody>
                                    <tr>
                                        <td class="text-right"><strong>Sub-Total</strong></td>
                                        <td class="text-left">$1,101.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                        <td class="text-left">$4.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>VAT (17.5%)</strong></td>
                                        <td class="text-left">$192.68</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Total</strong></td>
                                        <td class="text-left">$1,297.68</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p class="text-right btn-block1">
                                    <a href="cart.html">
                                        View Cart
                                    </a>
                                    <a href="#">
                                        Checkout
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Shopping Cart Ends -->
            </div>
        </div>
        <!-- Main Header Ends -->
        <nav id="main-menu" class="navbar" role="navigation">
            <!-- Nav Header Starts -->
            <div class="navbar-header">
                <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-cat-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-cat-collapse">
                <?php if ( has_nav_menu( 'mainmenu' ) ) : ?>
                    <?php
                    // mainmenu navigation menu.
                    wp_nav_menu( array(
                        'container'=>'none',
                        'menu_class'     => 'nav navbar-nav',
                        'theme_location' => 'mainmenu',
                    ) );
                    ?>
                <?php endif ?>
            </div>

        </nav>

        <!-- Main Menu Starts -->
        <nav id="main-menu" class="navbar hidden" role="navigation">
            <!-- Nav Header Starts -->
            <div class="navbar-header">
                <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-cat-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <!-- Nav Header Ends -->
            <!-- Navbar Cat collapse Starts -->
            <div class="collapse navbar-collapse navbar-cat-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="category-list.html">Spices &amp; Herbs</a></li>
                    <li class="dropdown">
                        <a href="category-list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                            Chili Powder
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>#">Red Chilly</a></li>
                            <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>#">Green Chilly</a></li>
                            <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>#">Italian Chilly</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="category-list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">Curry Powder</a>
                        <div class="dropdown-menu">
                            <div class="dropdown-inner">
                                <ul class="list-unstyled">
                                    <li class="dropdown-header">Sub Category</li>
                                    <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>#">item 1</a></li>
                                    <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>#">item 2</a></li>
                                    <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>#">item 3</a></li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="dropdown-header">Sub Category</li>
                                    <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>#">item 1</a></li>
                                    <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>#">item 2</a></li>
                                    <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>#">item 3</a></li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li class="dropdown-header">Sub Category</li>
                                    <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>#">item 1</a></li>
                                    <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>#">item 2</a></li>
                                    <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>#">item 3</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="category-list.html">Herb Blends</a></li>
                    <li><a href="category-list.html">Seasonings</a></li>
                    <li><a href="category-list.html">Salt Free Spices</a></li>
                    <li><a href="category-list.html">Sambar Powders</a></li>
                    <li class="dropdown">
                        <a href="category-list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                            Pages
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>/">Home</a></li>
                            <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>about.html">About</a></li>
                            <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>category-list.html">Category List</a></li>
                            <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>category-grid.html">Category Grid</a></li>
                            <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>product.html">Product</a></li>
                            <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>product-full.html">Product Full Width</a></li>
                            <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>cart.html">Cart</a></li>
                            <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>login.html">Login</a></li>
                            <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>compare.html">Compare Products</a></li>
                            <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>typography.html">Typography</a></li>
                            <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>register.html">Register</a></li>
                            <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>contact.html">Contact</a></li>
                            <li><a tabindex="-1" href="<?= get_template_new_directory(); ?>404.html">404</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Navbar Cat collapse Ends -->
        </nav>
        <!-- Main Menu Ends -->
    </div>
    <!-- Ends -->
</header>