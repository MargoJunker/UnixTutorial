<?php get_header(); ?>
    

            <div class="row">
                    <?php 
                    global $query_string;
                    query_posts ();
                    if (have_posts()) : while (have_posts()) : the_post();
                    ?>
                <!-- Thumbnail -->
                <div class="col-sm-12 tutorial-item-row" onclick="location.href='<?php the_permalink(); ?>';" style="cursor: pointer;">
                    <div class="col-sm-4 tutorial-item-img">
                        <div class="tutorial-img hidden-xs">
                            <?php if ( has_post_thumbnail() ) {	the_post_thumbnail(); } ?>
                        </div>
                    </div>
                    <!-- Title & Excerpt -->
                    <div class="col-sm-8 tutorial-item-description">
                        <h2 class="tutorial-item-h2">
                            <?php the_title(); ?>
                        </h2>
                        <div class="hidden-xs hidden-sm">    
                            <p class="tutorial-item-p">
                                <?php the_excerpt();?>
                            </p>
                        </div>
                    </div>
                </div>
                    <?php endwhile;
                        else :
                            echo '<p>No content found</p>';
                        endif; ?><!-- End of loop -->
            </div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>