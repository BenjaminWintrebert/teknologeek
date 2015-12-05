<?php
/**
 * @package fabthemes
 * @since fabthemes 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?>>
	<div class="vimg">
		
		<?php 
		
		if ( has_post_video( $post_id )) { ?>
			<a class="fancybox" href="<?php echo get_the_post_video_url( $post_id ); ?>"> <img class="postimg" src="<?php video_image(); ?>"/> </a>
		<?php } else { ?>
			<a href="<?php the_permalink(); ?>"> <img class="postimg" src="<?php feat_image();  ?>"/> </a>
		<?php } ?>
		
	
	</div>
	
	<header class="post-header">
	
		 <div class="top-meta"> <?php the_category(', '); ?> </div>
		 
		<h1 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'fabthemes' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		
	
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php print_excerpt(150); ?>
	</div><!-- .entry-summary -->
	<div class="rmore"> <a href="<?php the_permalink(); ?>">Read More</a></div>
</article><!-- #post-<?php the_ID(); ?> -->
