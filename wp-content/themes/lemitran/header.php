<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<meta name="description" content="Công ty trách nhiệm hữu hạn một thành viên Lê My Trần chuyên cung cấp sản phẩm keo dán gạch, keo cấy thép, khoan cấy thép và khoan rút lõi" />
	<meta name="keywords" content="keo dan gach, keo cay thep, khoan cay thep, khoan rut loi" />
	<meta name="copyright" content="Công Ty TNHH MTV Lê My Trần" />
	<meta name="author" content="Công Ty TNHH MTV Lê My Trần">
	<meta name="resource-type" content="document" />
	<meta name="distribution" content="global" />
	<meta name="robots" content="index, archive, follow, noodp">
	<meta name="googlebot" content="index, archive, follow, noodp">
	<meta name="msnbot" content="all, index, follow">
	<meta name="revisit-after" content="1 days" />
	<meta name="rating" content="general" />
	<meta property="og:title" content="Công ty trách nhiệm hữu hạn một thành viên Lê My Trần">
	<meta property="og:type" content="webpage">
	<meta property="og:description" content="Chuyên cung cấp sản phẩm keo dán gạch, keo cấy thép, khoan cấy thép và khoan rút lõi">
	<meta property="og:site_name" content="Công Ty TNHH MTV Lê My Trần">
	<meta property="og:image" itemprop="thumbnailUrl" content="">
	<meta property="og:url" content="">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body>
	<div id="wrapper">
		<header>
			<section id="header">
				<div class="container-fluid">
					<div class="container">
						<div class="row">
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 col-lmt-12 logo">
								<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" width="100%"></a>
							</div>
							<!-- /.col-lg-2 -->
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 none-xs">
								<h1>công ty tnhh một thành viên<br/><span> lê my trần</span></h1>
							</div>
							<!-- /.col-lg-5 -->
							<div class="col-lg-4 col-md-3 col-sm-4 col-xs-12">
								<form action="<?php echo home_url( '/' ); ?>" method="GET">
							    <div class="input-group">
							      <input type="text" class="form-control" placeholder="<?php _e('Tìm kiếm', 'lemitran') ?>" name="s" value="<?php the_search_query(); ?>">
							      <div class="input-group-btn">
							        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							      </div>
							    </div>
							  </form>
							</div>
							<!-- /.col-lg-3 -->
							<div class="col-lg-2 col-md-3 social-network">
								<a href="" class="facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
								<a href="" class="google-plus"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
								<a href="" class="youtube"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
							</div>
							<!-- /.cod-lg-2 -->
						</div>
						<!-- /.row -->
					</div>
				</div>
			</section>

			<!-- /.section -->
			<section id="nav">
				<div class="container">
						<?php wp_nav_menu( array(
						     'theme_location' => 'top-menu', // tên location cần hiển thị
						     'menu' => 'top-menu',
						     'container' => 'nav'
						) ); ?>
					<div id="menu-mobile">
						<a href="#mmenu"><i class="fa fa-bars"></i></a>
					</div>
					<?php wp_nav_menu( array(
						     'theme_location' => 'top-menu', // tên location cần hiển thị
						     'menu' => 'top-menu',
						     'container' => 'nav',
						     'container_id' => 'mmenu'
						) ); ?>
					
					<div class="phone-nav">
						<a href="tel:+84913414066" title="Hotline"><i class="fa fa-phone" aria-hidden="true"></i></a>
						<span class="none-xs">0236.3609.055 - 0913.414.066</span>
					</div>
				</div>
				<!-- /.container -->
			</section>
			<!-- /.section -->

		</header>