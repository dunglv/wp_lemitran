<?php get_header(); ?>
<?php //var_dump(get_post()); die; ?>
<section class="banner product-banner" style="background: url(<?php echo get_template_directory_uri(); ?>/images/banner-sp.jpg) center left no-repeat fixed; background-size: cover;">
	<marquee class="marquee" align="center" direction="right" height="300" scrollamount="7" behavior="alternate" width="50%">
		chi tiết sản phẩm
		<?php 
			// $args = array( 'post_type' => 'product', 'id' => get_the_ID() );
	  //   	$product = new WP_Query( $args );
			// var_dump(expression)
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
						<?php //while ( $product->have_posts() ) : $product->the_post();?>
						<div class="box-body">
							<div class="row">
								<div class="col-md-5">
									<div class="img-detail-product">
										<?php if( has_post_thumbnail()): ?>
											<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-thumbnail" alt="">
										<?php endif; ?>
									</div>
								</div>
								<div class="col-md-7">
									<div class="text-detail-product">
										<h2><?php the_title(); ?></h2>
										<p class="code-product"><strong>MSP: </strong><span>SP001</span></p>
										<p class="code-product"><strong>Bảo Hành: </strong><span>12 tháng</span></p>
										<div class="box-info-dp">
											<strong>Chứng nhận:</strong><br/>
											- Bê tông chịu nén và chịu kéo c20/25 đến c50/60<br/>
											- thép chờ kết cấu chịu lực<br/>
											<strong>Thích hợp với</strong><br/>
											- Bê tông C12/15<br/>
											- Đá đặc tự nhiên<br/>
											<strong>Ứng dụng sản phẩm</strong><br/>
											- Dùng khoan cấy hép sàn, dầm, ram dốc tầng hầm<br/>
											- Dùng khoan cấy hệ bulong kết cấu thép như chân cột, kèo thép<br/>
											- Dùng khoan cấy hệ bulong neo đỡ hệ giằng shoring chống tường vây trong công trình cao tầng<br/>
										</div>
									</div>
								</div>
							</div>
							<!-- /.row	-->
							<div class="row infor-detail-product">
								<div class="col-md-12">
									<ul class="nav nav-tabs">
								    <li class="active"><a data-toggle="tab" href="#tab1">Thông Tin</a></li>
								    <li><a data-toggle="tab" href="#tab2">Thông Số Kỹ Thuật</a></li>
								    <li><a data-toggle="tab" href="#tab3">Hướng Dẫn</a></li>
								    <li><a data-toggle="tab" href="#tab4">Video/ Hình Ảnh</a></li>
								  </ul>
								  <div class="tab-content">
								    <div id="tab1" class="tab-pane fade in active">
										<?php echo ( get_post_meta( get_the_ID(), 'custom_information', true )!=""?get_post_meta( get_the_ID(), 'custom_information', true ): _e('Dữ liệu đang được cập nhật', 'lemitran')); ?>
								    </div>
								    <!-- /.tab -->
								    <div id="tab2" class="tab-pane fade">
										<?php echo ( get_post_meta( get_the_ID(), 'custom_digital', true )!=""?get_post_meta( get_the_ID(), 'custom_digital', true ): _e('Dữ liệu đang được cập nhật', 'lemitran')); ?>
								    </div>
								    <!-- /.tab -->
								    <div id="tab3" class="tab-pane fade">
										<?php echo ( get_post_meta( get_the_ID(), 'custom_guide', true )!=""?get_post_meta( get_the_ID(), 'custom_guide', true ):_e('Dữ liệu đang được cập nhật', 'lemitran') ); ?>								      
								    </div>
								    <!-- /.tab -->
								    <div id="tab4" class="tab-pane fade">
								    	<?php echo ( get_post_meta( get_the_ID(), 'custom_media', true )!=""?(get_post_meta( get_the_ID(), 'custom_media', true )):_e('Dữ liệu đang được cập nhật', 'lemitran') ); ?>
								    </div>
								    <!-- /.tab -->
								  </div>
								</div>
								<!-- /.col -->
								<?php
									wp_reset_query();
									$custom_taxterms = wp_get_object_terms( $post->ID, 'type-of-product', array('fields' => 'ids') );
									// arguments
									$args = array(
										'post_type' => 'product',
										'post_status' => 'publish',
										'posts_per_page' => 5, // you may edit this number
										'orderby' => 'rand',
										'tax_query' => array(
										    array(
										        'taxonomy' => 'type-of-product',
										        'field' => 'id',
										        'terms' => $custom_taxterms
										    )
										),
										'post__not_in' => array ($post->ID),
										);
										$related_items = new WP_Query( $args );
										if ($related_items->have_posts()):
											
								 ?>
											<div class="col-md-12">
												<h1 class="type-product"><i class="fa fa-address-book-o" aria-hidden="true"></i>Sản Phẩm Liên Quan</h1>
												<ul id="type-product-slider" class="content-slider">
													<?php while ( $related_items->have_posts()): $related_items->the_post(); ?>
									                <li>
														<div class="item">
															<div class="item-img">
																<?php if( has_post_thumbnail()): ?>
																	<a href="<?php echo get_the_post_thumbnail_url(); ?>" title="Sản phẩm <?php the_title(); ?>">
																		<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
																	</a>
																<?php endif; ?>
															</div>
															<h3><a href="detail-sp.html"><?php the_title() ?></a></h3>
															<p class="code-product">MSP: <span>SP001</span></p>
															<a href="<?php the_permalink(); ?>" class="btn btn-primary hvr-shutter-out-horizontal"><?php _e('Chi tiết', 'lemitran') ?></a>
														</div>
									                </li>
									                <?php endwhile; wp_reset_query(); ?>
					            				</ul>											
											</div>
										<?php endif; ?>
							</div>
							<!-- /.row	-->
            			</div>
            			<?php //endwhile; //wp_reset_query();?>
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