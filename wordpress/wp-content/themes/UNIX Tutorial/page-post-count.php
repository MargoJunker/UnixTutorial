<?php $popularpost = new WP_Query( array( 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
<span style="display: block; "><?php the_title(); ?> - <?php echo wpb_get_post_views(get_the_ID()); ?></span>
<?php endwhile; ?>