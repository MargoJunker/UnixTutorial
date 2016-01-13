<?php get_header(); ?>
           
            <div class="row">
                <div class="jumbotron hidden-xs">
                    <img class="" src="http://promotions.newegg.com/tablet/13-3226/970x90.jpg">
                </div>
                <div class="col-md-3">
                    <div class="row toc">
                        <div class="scrollspy" id="myScrollspy">
                            <ul class="nav nav-tabs nav-stacked affix visible-lg-block visible-md-block" data-spy="affix" id="nav" data-offset-top="232">
                                <?php if( dynamic_sidebar( 'toc_widget' ) ) : else : endif; ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Table of Contents -->
                
                <!-- Content -->
                <div class="col-md-9 tutorial-content">
                    <?php while ( have_posts() ) : the_post();
                    wpb_set_post_views(get_the_ID());

                    get_template_part( 'content', 'single' );

                    the_post_navigation(); ?>

                    <?php endwhile; // end of the loop. ?>
                </div>
                <!-- /Content -->
            </div>
            
<?php get_sidebar(); ?>
<?php get_footer(); ?>
