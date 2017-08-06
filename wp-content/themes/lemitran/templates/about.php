<?php 
/* Template Name: About Page */ 

get_header();?>

		
	<section class="banner intro-banner" style="background:  url(<?php echo get_template_directory_uri() ?>/images/banner-gt.jpg) top left no-repeat fixed">
			<marquee class="marquee" align="center" direction="right" height="300" scrollamount="7" behavior="alternate" width="50%">
				giới thiệu
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
									  <li class="breadcrumb-item active">Giới Thiệu</li>
									</ol>
								</div>
								<div class="box-body">
									<h1 style="font-weight: bold; text-align: center; font-size: 20px;">CÔNG TY TNHH MỘT THÀNH VIÊN LÊ MY TRẦN</h1>
									<p style="margin-top: 10px;">Đại diện khu vực miền trung, chuyên cung cấp thiết bị xây dựng như máy đo khoảng cách bằng Laser Lecia - Disto Thụy Sỹ. Keo cấy thép, tắc kê bulong cường độ cao Fischer Đức</p>
									<img src="<?php echo get_template_directory_uri() ?>/images/gt1.jpg" style="text-align: center; max-width: 100%;margin-top: 5px;">
									<h2 style="font-size: 18px; font-weight: 500">Thông tin liên hệ</h2>
									<p style="margin-top: 5px;">
										<strong>+ Tel:</strong> 02363 609 055<br/>
										<strong>+ Fax:</strong> 0236 3727267<br/>
										<strong>+ Hotline:</strong> 0913 414 066<br/>
										<strong>+ Email:</strong> lemytran0707@gmail.com
									</p>
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