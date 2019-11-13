<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<h2>really good!</h2>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			)
		);
		?>
	</div><!-- .entry-content -->



	<?php
		if ( get_field('logo') ){  ?>
			<h2> <?php the_field('logo')?> </h2>
	<?php } ?>

	<?php
		if ( get_field('postal_address') ){  ?>
			<h2> <?php the_field('postal_address')?> </h2>
	<?php } ?>

	<?php
		if ( get_field('email_address') ){  ?>
			<h2> <?php the_field('email_address')?> </h2>
	<?php } ?>

	<?php
		if ( get_field('phone_number') ){  ?>
			<h2> <?php the_field('phone_number')?> </h2>
	<?php } ?>

	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->'
		);
		?>

</article><!-- #post-<?php the_ID(); ?> -->
