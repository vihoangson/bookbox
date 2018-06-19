<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<!-- Main Container Starts -->
<div id="main-container" class="">
    <div class="row">
        <!-- Primary Content Starts -->
        <div class="col-md-9">
            <!-- Breadcrumb Starts -->
            <ol class="breadcrumb">
                <li><a href="/">Trang chủ</a></li>
                <li><a href="">Sách</a></li>
                <li class="active"><?php the_title(); ?></li>
            </ol>
            <!-- Breadcrumb Ends -->
            <!-- About Content Starts -->
            <div class="page-box">
                <div class="">

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php
                            if ( is_single() ) :
                                the_title( '<h1 class="entry-title">', '</h1>' );
                            else :
                                the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
                            endif;
                            ?>
                        </header><!-- .entry-header -->
                        <div class="text-center">
                            <?php
                            // Post thumbnail.
                            twentyfifteen_post_thumbnail();
                            ?>
                        </div>
                        <br>
                        <div class="entry-content">
                            <?php
                            /* translators: %s: Name of current post */
                            the_content( sprintf(
                                __( 'Continue reading %s', 'twentyfifteen' ),
                                the_title( '<span class="screen-reader-text">', '</span>', false )
                            ) );

                            wp_link_pages( array(
                                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
                                'after'       => '</div>',
                                'link_before' => '<span>',
                                'link_after'  => '</span>',
                                'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
                                'separator'   => '<span class="screen-reader-text">, </span>',
                            ) );
                            ?>
                        </div><!-- .entry-content -->

                        <?php
                        // Author bio.
                        if ( is_single() && get_the_author_meta( 'description' ) ) :
                            get_template_part( 'author-bio' );
                        endif;
                        ?>

                        <footer class="entry-footer">
                            <?php twentyfifteen_entry_meta(); ?>
                            <?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
                        </footer><!-- .entry-footer -->
                        <?php //get_template_part('book'); ?>
                    </article><!-- #post-## -->
                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>
                    <div class="col-sm-4 hidden">
                        <img src="<?php get_template_new_directory(); ?>images/misc/about-image1.jpg" alt="image" class="img-responsive" />
                    </div>
                    <div class="col-sm-8 hidden">
                        <h3>Joe Doejuli</h3>
                        <h4>Manager</h4>
                        <ul class="list-unstyled list-inline sm-links">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software.
                        </p>
                    </div>
                </div>
                <br />
                <p class="hidden">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including  versions of Lorem Ipsum.
                </p>
            </div>
            <!-- About Content Ends -->

            <hr class="hidden" />

            <!-- Testimonials Starts -->
            <h2 class="sub-heading text-center hidden">
                Testimonials
            </h2>
            <!-- Testimonial #1 Starts -->
            <div class="media panel-smart hidden">
                <img src="<?php get_template_new_directory(); ?>images/testimonial-images/image1.jpg" alt="image" class="img-responsive pull-left" />
                <div class="media-body">
                    <blockquote>
                        <p>
                            " Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. "
                        </p>
                        <footer>
                            Tim Barkley, <cite>Manager</cite>
                        </footer>
                    </blockquote>
                </div>
            </div>
            <!-- Testimonial #1 Ends -->

            <!-- Testimonials Ends -->
        </div>
        <!-- Primary Content Ends -->
        <!-- Sidebar Starts -->
        <div class="col-md-3 widget">
            <!-- Categories Links Starts -->
            <h3 class="side-heading">Categories</h3>
            <div class="list-group">
                <a href="category-grid.html" class="list-group-item">
                    <i class="fa fa-chevron-right"></i>
                    Spices &amp; Herbs
                </a>
                <a href="category-grid.html" class="list-group-item">
                    <i class="fa fa-chevron-right"></i>
                    Chili Powder
                </a>
                <a href="category-grid.html" class="list-group-item">
                    <i class="fa fa-chevron-right"></i>
                    Herb Blends
                </a>
                <a href="category-grid.html" class="list-group-item">
                    <i class="fa fa-chevron-right"></i>
                    Seasonings
                </a>
                <a href="category-grid.html" class="list-group-item">
                    <i class="fa fa-chevron-right"></i>
                    Salt Free Spices
                </a>
            </div>
            <!-- Categories Links Ends -->
            <!-- Shopping Options Starts -->
            <h3 class="side-heading">Shopping Options</h3>
            <div class="list-group">
                <div class="list-group-item">
                    Brands
                </div>
                <div class="list-group-item">
                    <div class="filter-group">
                        <label class="checkbox">
                            <input name="filter1" type="checkbox" value="br1" checked="checked" />
                            Brand Name 1
                        </label>
                        <label class="checkbox">
                            <input name="filter2" type="checkbox" value="br2" />
                            Brand Name 2
                        </label>
                        <label class="checkbox">
                            <input name="filter2" type="checkbox" value="br2" />
                            Brand Name 3
                        </label>
                    </div>
                </div>
                <div class="list-group-item">
                    Manufacturer
                </div>
                <div class="list-group-item">
                    <div class="filter-group">
                        <label class="radio">
                            <input name="filter-manuf" type="radio" value="mr1" checked="checked" />
                            Manufacturer Name 1
                        </label>
                        <label class="radio">
                            <input name="filter-manuf" type="radio" value="mr2" />
                            Manufacturer Name 2
                        </label>
                        <label class="radio">
                            <input name="filter-manuf" type="radio" value="mr3" />
                            Manufacturer Name 3
                        </label>
                    </div>
                </div>
                <div class="list-group-item">
                    <button type="button" class="btn btn-warning">Filter</button>
                </div>
            </div>
            <!-- Shopping Options Ends -->
            <!-- Bestsellers Links Starts -->
            <h3 class="side-heading">Bestsellers</h3>
            <div class="product-col">
                <div class="image">
                    <img src="<?php get_template_new_directory(); ?>images/product-images/pimg1.jpg" alt="product" class="img-responsive" />
                </div>
                <div class="caption">
                    <h4>
                        <a href="product-full.html">Simply Organic Seeds</a>
                    </h4>
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
            <!-- Bestsellers Links Ends -->
        </div>
        <!-- Sidebar Ends -->
    </div>
</div>
<!-- Main Container Ends -->



