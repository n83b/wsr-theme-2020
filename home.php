<?php
/* This is the blog main archive page */
?>

<?php get_header(); ?>

<h1 class="title"><?php echo get_bloginfo('name')?></h1>
<h2 class="subtitle"><?php echo get_bloginfo('description') ?></h2>

<div class="row homeTitleContent">
    <?php 
    $id= esc_attr( get_option('safetygeek_homepage_id') );
    $post = get_post($id); 
    $content = apply_filters('the_content', $post->post_content); 
    echo $content;  ?>
</div>

    <div class="row">
	   <!-- <h3 class="main-header">Safety Blog</h3> -->
    </div>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="rowBG">
                    <div class="row">
                        <div class="col50 archiveImge">
                            <a href="<?php the_permalink()?>"><?php the_post_thumbnail( 'medium', array('class' => 'img-responsive archive-thumb')); ?></a>
                        </div>
                        <div class="col50">
                            <h3 class="blog-archive-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <em><?php //the_time(get_option('date_format')); ?></em>
                            <div class="archiveExcerpt">
                                <?php the_excerpt(); ?>
                                <br />
                                <a href="<?php the_permalink()?>">Read More....</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile;  ?>
        <?php else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

		<?php //dynamic_sidebar( 'sidebar-1' ); ?> 

<?php get_footer(); ?>