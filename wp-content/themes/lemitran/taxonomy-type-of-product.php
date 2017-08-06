<?php get_header() ?>
<section class="banner product-banner" style="background: url(<?php echo get_template_directory_uri(); ?>/images/banner-sp.jpg) center left no-repeat fixed; background-size: cover;">
	<marquee class="marquee" align="center" direction="right" height="300" scrollamount="7" behavior="alternate" width="50%">
		<?php 
			$term  = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );;
			// var_dump($term);
			echo apply_filters( 'the_title', $term->name );
			 wp_reset_query();
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
		    $args = array(
		    	'post_type' => 'product',
		    	'posts_per_page' => 1,
		    	'paged' => $paged,
		        'tax_query' => array(
		            array(
		                'taxonomy' => 'type-of-product',
		                'field' => 'slug',
		                'terms' => $term->slug,
		            ),
		        ),
		     );
		    $products = new WP_Query($args);
		 ?>
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
				<article id="product-content" class="product-content">
					<div class="box">
						<div class="box-header with-border">
							<ol class="breadcrumb">
							  <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
							  <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
							  <li class="breadcrumb-item active">Sản Phẩm</li>
							</ol>
						</div>
						<div class="box-body">
							<div class="row">
								<?php 
								if ($products->have_posts()):
									while ($products->have_posts()):
										$products->the_post();
								
								?>

								<div class="col-lg-3 col-sm-4 col-xs-12">
									<div class="item">
										<div class="item-img">
											<a href="<?php echo get_template_directory_uri(); ?>/images/product/sp1.jpg" title="Máy đo khoảng cách bằng laser Leica D2">
												<img src="<?php echo get_template_directory_uri(); ?>/images/product/sp1.jpg" alt="">
											</a>
										</div>
										<h3><a href="detail-sp.html"><?php the_title(); ?></a></h3>
										<p class="code-product">MSP: <span>SP001</span></p>
										<a href="<?php the_permalink() ?>" class="btn btn-primary hvr-shutter-out-horizontal">Chi tiết</a>
									</div>
								</div>
								<?php 
								endwhile;
								else:
									echo 'No data';
								endif; ?>
								<!-- /.col -->
								
							</div>
							<!-- /.row	-->
							<nav aria-label="Page navigation example" class="lmt-page">
							<?php
								
								lvd_pagination($products);
								?>
							<?php   //wp_reset_query();?>
							</nav>									
            </div>
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