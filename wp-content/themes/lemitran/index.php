<?php get_header(); ?>

	<section id="lmt-slider">
		<?php get_sidebar('slider'); ?>		
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

		        	 <div class="box-body">
							<?php 
							$args = array(
								'post_type' => 'post',
								'showposts' => 5,
								);
							$posts = new WP_Query($args);
							if( $posts->have_posts() ):
								while( $posts->have_posts() ) : $posts->the_post();
							 ?>
								<div class="row box-news">
									<div class="col-lg-4 col-md-4">
										<div class="img-news">
										<?php if (has_post_thumbnail()):?>
											<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""  class="img-thumbnail">
										<?php else: ?>
											<!-- <img src="" alt=""  class="img-thumbnail"> -->
										<?php endif; ?>
										</div>
									</div>
									<!-- /.col -->
									<div class="col-lg-8 col-md-8">
										<div class="content-news">
											<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
											<p class="date-time-news">(<?php echo get_the_date('d-m-Y') ?>)</p>
											<p class="text-news"><?php the_excerpt() ?></p>
										</div>
									</div>
									<!-- /.col -->
								</div>
							<?php
								endwhile;
								else: 
							?>
							<p><?php __('Dữ liệu đang được cập nhật', 'lemitran') ?></p>
							<?php endif; wp_reset_query(); ?>
			            </div>
			            <!-- ENd news -->
				</div>
            </div>
            <!-- /.box -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /.section -->
<script src="<?php echo get_template_directory_uri() ?>/js/jssor.slider.mini.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/slider.js"></script>
<?php get_footer(); ?>
