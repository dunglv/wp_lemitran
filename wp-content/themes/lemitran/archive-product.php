<?php
get_header();
?>
<section class="banner news-banner" style="background: url(<?php echo get_template_directory_uri() ?>/images/banner-tt.jpg) top left no-repeat fixed;background-size: cover;">
	<marquee class="marquee" align="center" direction="right" height="300" scrollamount="7" behavior="alternate" width="50%">
		Các sản phẩm hiện có
	</marquee>
</section>
<!-- /.section -->
	<section id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php get_sidebar(); ?>
				</div>
				<!-- /.col -->
				<div class="col-md-9">
				<?php 
           			 $terms = get_terms( array(
					    'taxonomy' => 'type-of-product',
					    'hide_empty' => true,
					    'number' => 5
					)
		  		);
		            foreach ($terms as $term):
		            	# code...
		             ?>
			         <div class="product-content">
			         	<div class="box box-warning">
							<div class="box-header with-border">
								<h3><?php echo $term->name ?></h3>
								<div class="box-tools pull-right">
									<a href="<?php echo get_term_link($term); ?>"><span class="none-xs"><?php _e('Xem thêm', 'lemitran') ?> </span><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>
							</div>
							<div class="box-body">
								<ul class="selling-product-slider content-slider">
									<?php 
									wp_reset_query();
									$args = array('post_type' => 'product',
								        'tax_query' => array(
								            array(
								                'taxonomy' => 'type-of-product',
								                'field' => 'slug',
								                'terms' => $term->slug,
								            ),
								        ),
								     );
									$products = new WP_Query($args); 
									// var_dump($products);
									while ($products->have_posts()):
										$products->the_post();
									 ?>
					                <li>
										<div class="item">
											<div class="item-img">
												<?php if (has_post_thumbnail()):?>
													<a href="<?php echo get_the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>">
														<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
													</a>
												<?php else: ?>
													<!-- <a href="images/product/c1.jpg" title="<?php the_title(); ?>">
														<img src="<?php echo get_template_directory_uri(); ?>/images/product/c1.jpg" alt="">
													</a> -->
												<?php endif; ?>
												
											</div>
											<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
											<p class="code-product">MSP: <span>SP001</span></p>
											<a href="<?php the_permalink(); ?>" class="btn btn-primary hvr-shutter-out-horizontal"><?php _e('Chi tiết', 'lemitran') ?></a>
										</div>
					                </li>
					                <?php endwhile; wp_reset_query(); ?>
				            	</ul>
				            </div>
			            </div>
			         </div>
		            
		            <!-- /.box -->
		        	<?php endforeach; ?>
				</div>
            </div>
            <!-- /.box -->
		</div>
		<!-- /.container -->
	</section>

<?php get_footer() ?>
