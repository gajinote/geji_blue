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
                            <h2>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="post-meta">
                                <?php echo get_the_date(); ?>【<?php the_category(', '); ?>】
                            </div>
                            <div class="post-body">
                                <?php the_content(); ?>
                </div> 
                         </div>
                     </div>
                </div><!-- /post -->
                <div class="navigation">
                    <?php if (get_previous_post_link()!=""): ?>
                    <div class="prev"><?php previous_post_link(); ?></div>
                    <?php endif; ?>
                    <?php if (get_next_post_link()!=""): ?>
                    <div class="next"><?php next_post_link(); ?></div>
                    <?php endif; ?>
                </div>

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
