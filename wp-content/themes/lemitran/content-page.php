<section class="banner news-banner">
	<marquee class="marquee" align="center" direction="right" height="300" scrollamount="7" behavior="alternate" width="50%">
		tin tức  home
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
							$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
							$args = array(
								'post_type' => 'post',
								'posts_per_page' => 5,
								'paged' => $paged
								);
							$posts = new WP_Query($args);
							if( $posts->have_posts() ):
								while( $posts->have_posts() ) : $posts->the_post();
							 ?>
								<div class="row box-news">
									<div class="col-lg-4 col-md-4">
										<div class="img-news">
											<?php the_post_thumbnail('post-thumbnail') ?>
											<!-- <img src="images/tt2.jpg" alt="" width="259" height="175" class="img-thumbnail"> -->
										</div>
									</div>
									<!-- /.col -->
									<div class="col-lg-8 col-md-8">
										<div class="content-news">
											<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
											<p class="date-time-news">(<?php echo get_the_date('d-m-Y') ?>)</p>
											<p class="text-news"><?php the_excerpt() ?></p>
											<p class="more-news"><a href="<?php the_permalink(); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i><?php _e('Xem Thêm', 'lemitran') ?></a></p>
										</div>
									</div>
									<!-- /.col -->
								</div>
							<?php
								endwhile;
								else: 
							?>
							<p><?php __('Dữ liệu đang được cập nhật', 'lemitran') ?></p>
							<?php endif; ?>
							<nav aria-label="Page navigation example" class="lmt-page">
								<?php lvd_pagination($posts); ?>
							</nav>
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
