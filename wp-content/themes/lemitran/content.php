<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<!-- box chứa nội dung tin tức -->
<div class="details-news">
	<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		endif;
	?>
	<div class="text-detail-news">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Tiếp tục đọc %s', 'lemitran' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );
		?>
	</div>
</div>
<!-- /.details-news -->