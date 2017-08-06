<?php

/**
 * Plugin Name: Latest News Widget
 * Author: lvd
 * 
 **/

/**
* 
*/
class LatestNews_Widget extends WP_Widget
{
	
	function __construct()
	{
		parent::__construct(
			'latest_news_widget',
			'Latest News Widget',
			array(
				'description' => 'Display List news latest'
				)
			);

		add_action('widgets_init', function(){
			register_widget('LatestNews_Widget');
		});

	}

	function form($instance)
	{
		$default = array( 'title' => 'Tiêu đề hiển thị', 'number_post' => 5);
		$instance = wp_parse_args($instance, $default);
		// echo '<pre>';
		// var_dump($instance);
		// echo '</pre>';
		$title = esc_attr($instance['title']);
		$number_post = esc_attr($instance['number_post']);
		echo '<div class="form-group">
				<label for="">Tiêu đề</label>
				<input type="text" class="form-control widefat" name="'.$this->get_field_name('title').'" placeholder="Tiêu đề hiển thị" value="'.$title.'">
			</div>';
		echo '<div class="form-group">
			<label for="">Số lượng bài viết</label>
			<input type="text" class="form-control widefat" name="'.$this->get_field_name('number_post').'" placeholder="Tiêu đề hiển thị" value="'.$number_post.'">
		</div>';
	}

	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		$instance['number_post'] = $new_instance['number_post'];
		return $instance;
	}

	// Show widget
	function widget($args, $instance)
	{
		$pq = new WP_Query(array( 'post_type' => 'post', 'showposts' => (int)$instance['number_post'] ));
		$t = '';
		if ($pq->have_posts()) {
			while ($pq->have_posts()) {
				$pq->the_post();
				echo '<p><a href="'.get_the_permalink(get_the_ID()).'"><i class="fa fa-angle-double-right" aria-hidden="true"></i>
				'.get_the_title(get_the_ID()).'</a></p>';
			}
			//wp_reset_query();
		}
		
	}
}

$my_widget = new LatestNews_Widget();