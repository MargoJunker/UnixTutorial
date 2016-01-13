<?php?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="col-sm-12 tutorial-item-row" onclick="location.href='<?php the_permalink(); ?>';" style="cursor: pointer;">
                <div class="col-sm-4 tutorial-item-img">
                    <div class="tutorial-img img-responsive hidden-xs"><?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
 } ?></div>
                </div>
                <div class="col-sm-8 tutorial-item-description">
                    <h2 class="tutorial-item-h2"><?php the_title(); ?></h2>
                    <p class="tutorial-item-p"><?php the_excerpt();?></p>
                </div>
            </div>
</article><!-- #post-## -->
