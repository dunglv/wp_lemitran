<aside id="aside">
	<div class="panel panel-default">
		<div class="panel-heading"><h2><i class="fa fa-bars" aria-hidden="true"></i>danh mục sản phẩm</h2></div>
	  <div class="panel-body">
	  	<?php 
	  	// Get terms in custom taxonomy "type-of-product"
	  		$terms = get_terms( array(
				    'taxonomy' => 'type-of-product',
				    'hide_empty' => false,
				    'number' => 10
					)
			  	);
		?>
	  	<ul>
		  	<?php foreach ($terms as $term): ?>
		  		<li><a href="<?php echo get_term_link($term); ?>" class="hvr-sweep-to-right"><i class="fa fa-caret-right" aria-hidden="true"></i><?php echo $term->name; ?></a></li>
		  	<?php endforeach; ?>
	  	</ul>
	  </div>
	</div>
	<!-- /.panel -->
	<div class="panel panel-default support-online">
		<div class="panel-heading"><h2><i class="fa fa-comments-o" aria-hidden="true"></i>Hỗ trợ trực tuyến</h2></div>
	  <div class="panel-body">
	  	<div class="online sp1">
	  		<p>Tư vấn bán hàng 1</p>
	  		<p>Ms My: <span>0913.414.066</span></p>
	  	</div>
	  	<div class="online sp1">
	  		<p>Tư vấn bán hàng 1</p>
	  		<p>Ms My: <span>0913.414.066</span></p>
	  	</div>
	  	<div class="online sp2">
	  		<p>Email liên hệ</p>
	  		<p>lemytran0707@gmail.com</p>
	  	</div>
	  </div>
	</div>
	<!-- /.panel -->
	<div class="panel panel-default">
		<div class="panel-heading"><h2><i class="fa fa-fort-awesome" aria-hidden="true"></i>Lê My Trần</h2></div>
	  <div class="panel-body">
	  	<div class="social-facebook">
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Flemytran0707%2F&tabs=timeline&width=340&height=250&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
	  	</div>
	  </div>
	</div>
	<!-- /.panel -->
</aside>