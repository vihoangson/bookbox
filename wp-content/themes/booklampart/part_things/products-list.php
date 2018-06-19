<?php
$wpb_all_query = new WP_Query(['post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1,'post_format' => 'post-format-aside']); ?>
<!-- Latest Products Starts -->
<section class="products-list">
    <div class="">
        <!-- Heading Starts -->
        <h2 class="product-head">Thông tin sách</h2>
        <!-- Heading Ends -->
        <!-- Products Row Starts -->
        <div class="row">
            <!-- Product #1 Starts -->
            <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
            <div class="col-md-3 col-sm-6">


                <div class="product-col">
                    <div class="image">
                        <!--
                        <img src="<?= get_template_new_directory() ?>images/product-images/1.jpg" alt="product" class="img-responsive" />
                        -->
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <div class="caption">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <div class="description">
                            <?php the_excerpt();?>
                        </div>
                        <div class="price hidden">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" title="Compare" class="btn btn-compare hidden">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <a href="<?php the_permalink(); ?>" type="button" class="btn btn-cart ">
                                View
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <?php endwhile;?>
            <!-- Product #1 Ends -->
            <!-- Product #2 Starts -->
            <div class="col-md-3 col-sm-6 hidden">
                <div class="product-col">
                    <div class="image">
                        <img src="<?= get_template_new_directory() ?>images/product-images/2.jpg" alt="product" class="img-responsive" />
                    </div>
                    <div class="caption">
                        <h4><a href="product.html">Simply Organic Seeds</a></h4>
                        <div class="description">
                            We are so lucky living in such a wonderful time. Our almost unlimited ...
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" title="Compare" class="btn btn-compare">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #2 Ends -->
            <!-- Product #3 Starts -->
            <div class="col-md-3 col-sm-6 hidden">
                <div class="product-col">
                    <div class="image">
                        <img src="<?= get_template_new_directory() ?>images/product-images/3.jpg" alt="product" class="img-responsive" />
                    </div>
                    <div class="caption">
                        <h4><a href="product.html">Simply Organic Seeds</a></h4>
                        <div class="description">
                            We are so lucky living in such a wonderful time. Our almost unlimited ...
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" title="Compare" class="btn btn-compare">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #3 Ends -->
            <!-- Product #4 Starts -->
            <div class="col-md-3 col-sm-6 hidden">
                <div class="product-col">
                    <div class="image">
                        <img src="<?= get_template_new_directory() ?>images/product-images/4.jpg" alt="product" class="img-responsive" />
                    </div>
                    <div class="caption">
                        <h4><a href="product.html">Simply Organic Seeds</a></h4>
                        <div class="description">
                            We are so lucky living in such a wonderful time. Our almost unlimited ...
                        </div>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" title="Compare" class="btn btn-compare">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                            <button type="button" class="btn btn-cart">
                                Add to cart
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #4 Ends -->
        </div>
        <!-- Products Row Ends -->
    </div>
</section>
<!-- Latest Products Ends -->