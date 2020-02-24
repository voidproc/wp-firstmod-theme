<?php
/**
 * @package First
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php first_header_meta(); ?>
		<?php if ( has_post_thumbnail() ): ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		</div>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( ! get_post_format() && ( 'summary' == get_theme_mod( 'first_content' ) || is_search() ) ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>" rel="bookmark"><?php _e( '<span class="continue-reading">Continue reading &rarr;</span>', 'first' ); ?></a>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( '<span class="continue-reading">Continue reading &rarr;</span>', 'first' ) ); ?>
		<?php wp_link_pages( array(	'before' => '<div class="page-links">' . __( 'Pages:', 'first' ), 'after'  => '</div>', 'pagelink' => '<span class="page-numbers">%</span>',  ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

    <!-- カテゴリリストを追加 -->
    <?php first_footer_meta(); ?>

</article><!-- #post-## -->
