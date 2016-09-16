<?php?>
            </div>
        </div>
<!-- /Site-content -->

<!-- Footer -->
        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="site-info">
                <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?></p>
            </div>
        </footer>
<!-- /Footer -->
<!-- RSS Widget -->
        <div class="navbar-right rss-widget hidden-xs hidden-sm">
            <?php if( dynamic_sidebar( 'rss_widget' ) ) : else : endif; ?>
        </div>

        
<!-- /Page -->
    <?php wp_footer(); ?>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap-affix.js"></script>
        <?php
        if ( is_user_logged_in() ){ ?>
            <script>
            (function ($, window, delay) {
              var theTimer = 0;
              var theElement = null;
                var theLastPosition = {x:0,y:0};
              $('[data-toggle]')
                .closest('li')
                .on('mouseenter', function (inEvent) {
                if (theElement) theElement.removeClass('open');
                window.clearTimeout(theTimer);
                theElement = $(this);

                theTimer = window.setTimeout(function () {
                  theElement.addClass('open');
                }, delay);
              })
                .on('mousemove', function (inEvent) {
                    if(Math.abs(theLastPosition.x - inEvent.ScreenX) > 4 || 
                       Math.abs(theLastPosition.y - inEvent.ScreenY) > 4)
                    {
                        theLastPosition.x = inEvent.ScreenX;
                        theLastPosition.y = inEvent.ScreenY;
                        return;
                    }

                if (theElement.hasClass('open')) return;
                window.clearTimeout(theTimer);
                theTimer = window.setTimeout(function () {
                  theElement.addClass('open');
                }, delay);
              })
                .on('mouseleave', function (inEvent) {
                window.clearTimeout(theTimer);
                theElement = $(this);
                theTimer = window.setTimeout(function () {
                  theElement.removeClass('open');
                }, delay);
              });
            })(jQuery, window, 200); // 200ms ooteaeg
        </script>
        <?php } /* END if user is not logged in */ ?>
        
    </body>
</html>
