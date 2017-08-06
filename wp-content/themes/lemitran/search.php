<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<section class="banner news-banner">
	<marquee class="marquee" align="center" direction="right" height="300" scrollamount="7" behavior="alternate" width="50%">
		chi tiết tin tức
	</marquee>
</section>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
			<!-- /.col -->
			<div class="col-md-9">
				<article id="product-content">
					<div class="box">
						<div class="box-header with-border">
							<ol class="breadcrumb">
							  <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
							  <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
							  <li class="breadcrumb-item active">Tin Tức</li>
							</ol>
						</div>
						<div class="box-body">
							<?php
							if (have_posts()):
								// Start the loop.
								while ( have_posts() ) : the_post();

									/*
									 * Include the post format-specific template for the content. If you want to
									 * use this in a child theme, then include a file called called content-___.php
									 * (where ___ is the post format) and that will be used instead.
									 */
									get_template_part( 'content', get_post_format() );

									// If comments are open or we have at least one comment, load up the comment template.
									
									// Previous/next post navigation.
									
								// End the loop.
								endwhile;
								else:
									echo __('Not found result for ', 'lemitran').' <strong>'.get_search_query().'</strong>';
								endif;
								?>

           			 	</div>
            			<!-- /.box-body -->
			        </div>
			        <!-- /.box -->
				</article>
				<!-- /.acticle -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>
<?php get_footer(); ?>
