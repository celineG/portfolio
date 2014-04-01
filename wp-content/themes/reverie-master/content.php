<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('index-card'); ?>>
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php reverie_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php if(has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('medium');?>
		<?php endif; ?>

		 <?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL, 'thumbnail'); endif; ?>
		<figure><a href="<?php the_permalink(); ?>"><?php /*if ( has_post_thumbnail() ) {the_post_thumbnail('large'); } */?></a></figure> <?php the_excerpt(); ?>
	</div>
</article>