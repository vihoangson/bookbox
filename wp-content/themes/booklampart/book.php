<div style="clear:both"></div>
<div id="primary" class="content-area">
    <main id="main" class="site-main book-body" role="main">

        <?php
        $wpb_all_query = new WP_Query(['post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1,'post_format' => 'post-format-aside']); ?>

        <?php if ($wpb_all_query->have_posts()) : ?>
            <ul class="list-book">
                <!-- the loop -->
                <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
                    <li>
                        <div class="thumbnail-book">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>

                        <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>

                        <?php the_meta(); ?>

                    </li>

                <?php endwhile; ?>
                <!-- end of the loop -->

            </ul>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php _e('Chưa có thông tin.'); ?></p>
        <?php endif; ?>
    </main>
</div>
<div style="clear:both"></div>