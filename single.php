<?php
/* For use on single blog pages*/
?>

<?php get_header(); ?>
	<div class="singleContent">
		<div class="breadcrumb"><a href="<?php echo get_home_url(); ?>"> <i class="fas fa-arrow-circle-left"></i> Back to home</a></div>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	    	<div class="row">
	    		<div class="col">
					<div class="singleMeta">
						<span class="authormeta"><?php //the_author(); ?></span><?php the_time('F jS, Y'); ?>
					</div>
	        		<h1 class="single"><?php the_title(); ?></h1>
	        	</div>
	    	</div>
	    	<div class="row">
	    		<div class="col singleThumbail">
	        		<?php the_post_thumbnail( 'medium', array('class' => 'img-responsive aligncenter')); ?>
	        	</div>
	    	</div>
	    	<div class="row">
	    		<div class="col">
	        		<?php the_content(); ?>
	    		</div>
			</div>

	    <?php endwhile; else: ?>
	    	<div class="row">
	    		<div class="col">
	        		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	        	</div>
	        </div>
	    <?php endif; ?>
    </div>

<?php get_footer(); ?>