<?php get_header(); ?>
        <div id="main" class="container">
            <div id="posts">
		<?php
		  if (have_posts()) :
		    while (have_posts()) :
		      the_post();
		?>

                <div class="post">
                    <div class="post-header">
                        <div class="post-content">
                            <?php the_content(); ?>    
                        </div>
                    </div>
                </div><!-- /post -->
                <?php comments_template(); ?>
		<?php
		  endwhile;
		else:
		?>
		<p>記事はありません！</p>

		<?php
 		  endif;
		?>

            </div><!-- posts -->
            <?php get_sidebar(); ?>
        </div><!-- /main -->
        <?php get_footer(); ?>
