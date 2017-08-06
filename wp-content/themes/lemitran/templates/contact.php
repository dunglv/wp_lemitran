<?php 
/* Template Name: Contact Page*/

get_header();

?>

<section class="banner contact-banner" style="background: url(<?php echo get_template_directory_uri(); ?>/images/banner-lh.jpg) top left no-repeat fixed;background-size: cover;">
	<marquee class="marquee" align="center" direction="right" height="300" scrollamount="7" behavior="alternate" width="50%">
		liên hệ
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
							  <li class="breadcrumb-item active">Liên Hệ</li>
							</ol>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-md-6">
									<div class="title-form">
										<h2>Liên Hệ Với Lê My Trần</h2>
										<p>Để được tư vấn thêm thông tin về sản phẩm và dịch vụ, bạn vui lòng điền vào form bên dưới. Chúng tôi sẽ liên hệ với bạn sớm nhất có thể.</p>
									</div>
									<div class="form-lmt">
										<form>
											<div class="form-group has-error">
												<input type="text" class="form-control" placeholder="Họ và Tên">
												<label class="control-label" for="inputError1">Bạn chưa nhập họ tên</label>
											</div>
											<div class="form-group">
												<textarea class="form-control" rows="2" placeholder="Địa Chỉ" style="resize: none;"></textarea>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Điện Thoại">
											</div>
											<div class="form-group">
												<input type="email" class="form-control" placeholder="Email">
											</div>
											<div class="form-group">
												<textarea class="form-control"  rows="5" placeholder="Nội Dung" style="resize: none;"></textarea>
											</div>
											<button type="submit" class="btn btn-primary btn-lg">Liên Hệ</button>
										</form>
									</div>
								</div>
								<div class="col-md-5 col-md-offset-1">
									<div class="title-form">
										<h2>Vị Trí</h2>
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.138744272734!2d108.18182706278877!3d16.058288447013034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421905ca78e3d3%3A0x1c96a0c1d40dbe8e!2zTmd1eeG7hW4gxJDDrG5oIFThu7F1LCBUaGFuaCBLaMOqLCDEkMOgIE7hurVuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1501571248514" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
									<div class="title-form">
										<h2>Thông Tin Liên Hệ</h2>
										<P>212 Nguyễn Đình Tựu - Thanh Khê - Đà Nẵng</P>
									</div>
									<div class="contact-lmt">
										<p>
											<span class="fa fa-stack fa-rounded btn-color-192233 fa-1x"><i class="fa fa-comments"></i></span>
											<strong>lemytran0707@gmail.com</strong>
										</p>
										<p>
											<span class="fa fa-stack fa-rounded btn-color-192233 fa-1x"><i class="fa fa-phone"></i></span>
											<strong>0236.3609.055 - 0913.414.066</strong>
										</p>
									</div>
								</div>
							</div>
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

