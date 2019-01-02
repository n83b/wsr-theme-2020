<?php
/* This is the blog main archive page */
?>

<?php get_header(); ?>

	<h1 class="main-header">Latest News</h1>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="archive-section">
                <?php the_post_thumbnail( 'thumbnail', array('class' => 'img-responsive archive-thumb')); ?>
                <h4 class="blog-archive-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                <em><?php the_time(get_option('date_format')); ?></em>
                <?php the_excerpt(); ?>
            </div>

        <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

		<?php dynamic_sidebar( 'sidebar-1' ); ?> 

<?php get_footer(); ?>