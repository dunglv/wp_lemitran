	
		<section id="information">
			<div class="info-footer">
				<div class="container-fluid">
					<div class="container slider-customer">
						<div class="img-customer">
							<img src="<?php echo get_template_directory_uri(); ?>/images/doitac.png" alt="đối tác">
							<h1>Các đối tác của chúng tôi</h1>
						</div>
						<ul id="customer-slider" class="content-slider">
	            <li>
	            	<img src="<?php echo get_template_directory_uri(); ?>/images/dt1.jpg" alt="đối tác 1"></li>
	            </li>
	            <li>
	            	<img src="<?php echo get_template_directory_uri(); ?>/images/dt2.jpg" alt="đối tác 1"></li>
	            </li>
	            <li>
	            	<img src="<?php echo get_template_directory_uri(); ?>/images/dt3.jpg" alt="đối tác 1"></li>
	            </li>
	            <li>
	            	<img src="<?php echo get_template_directory_uri(); ?>/images/dt4.jpg" alt="đối tác 1"></li>
	            </li>
	            <li>
	            	<img src="<?php echo get_template_directory_uri(); ?>/images/dt5.jpg" alt="đối tác 1"></li>
	            </li>
	            <li>
	            	<img src="<?php echo get_template_directory_uri(); ?>/images/dt6.jpg" alt="đối tác 1"></li>
	            </li>
	            <li>
	            	<img src="<?php echo get_template_directory_uri(); ?>/images/dt7.jpg" alt="đối tác 1"></li>
	            </li>
	            <li>
	            	<img src="<?php echo get_template_directory_uri(); ?>/images/dt2.jpg" alt="đối tác 1"></li>
	            </li>
	            <li>
	            	<img src="<?php echo get_template_directory_uri(); ?>/images/dt3.jpg" alt="đối tác 1"></li>
	            </li>
	        	</ul>
					</div>
				</div>
				<div class="container-fluid bg-info-footer">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<h2>Giới Thiệu</h2>
								<p class="gt-footer">Công Ty TNHH MTV LÊ MY TRẦN đại diện tại khu vực miền trung máy đo khoảng cách bằng laser leica -disto thụy sỹ keo cấy thép, tắc kê bulong  cường độ cao fischer - đức
								</p>
							</div>
							<div class="col-md-3 col-sm-6">
								<h2>văn phòng giao dịch</h2>
								<p class="gt-footer">Địa chỉ: 212 Nguyễn Đình Tựu - Thanh Khê - Đà Nẵng<br/>
									Tel     : 0236 3609 055<br/>
									Fax    : 0236 3727267<br/>
									Hotline: 0913 414 066<br/>
									Email : lemytran0707@gmail.com
								</p>
							</div>
							<div class="clearfix visible-sm"></div>
							<p class="border"></p>
							<div class="col-md-3 col-sm-6">
								<h2>Bài viết mới</h2>
								<?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
									<div id="secondary" class="widget-area" role="complementary">
									<?php dynamic_sidebar( 'footer-widget-area' ); ?>
									</div>
								<?php endif; ?>

								<!-- <p><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>Máy đo khoảng cách bằng laser Leica D2</a></p>
								<p><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>Máy cân bằng Laser Leica Lino L2P5</a></p>
								<p><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>Keo cấy thép cường độ cao FEB RM 12</a></p>
								<p><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>Máy thủy bình tự động Leica Jogger 24</a></p>
								<p><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>Súng bắn keo chuyên dụng FIS AC/AK</a></p> -->
							</div>
							<div class="col-md-3 col-sm-6">
								<h2>Vị trí</h2>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.138744272734!2d108.18182706278877!3d16.058288447013034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421905ca78e3d3%3A0x1c96a0c1d40dbe8e!2zTmd1eeG7hW4gxJDDrG5oIFThu7F1LCBUaGFuaCBLaMOqLCDEkMOgIE7hurVuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1501571248514" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</section>
		
		<footer id="footer">
			<div class="container-fluid">
				<div class="container">
					<p>Copyright © <span style="color:#FCBE00;">Công Ty TNHH Một Thành Viên Lê My Trần</span> All rights reserved</p>
					<div class="footer-social">
						<a href="" class="bg-face"></a>
						<a href="" class="bg-plus"></a>
						<a href="" class="bg-twitter"></a>
						<a href="" class="bg-youtube"></a>
					</div>
				</div>
			</div>
		</footer>

	</div>
	<?php wp_footer(); ?>
</body>
</html>