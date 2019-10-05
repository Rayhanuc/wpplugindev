<?php 

class DemoWidgetUI extends WP_Widget {
	public function __construct(){
		parent::__construct(
			'demowidgetui',
			__('Demo Widget UI','demowidget'),
			array('description' => __('Our Widget UI Description','demowidget'))
		);
	}

	public function form($instance){
		$title = isset($instance['title'] ) ? $instance['title'] : __('Demo Widget','demowidget');
		$latitude = isset($instance['latitude'] ) ? $instance['latitude'] : 23.9;
		$longitute = isset($instance['longitute'] ) ? $instance['longitute'] : 90.8;
		$email = isset($instance['email'] ) ? $instance['email'] : 'kako@kilo.com';

		?>

		<p>
				<label for="<?php echo esc_attr( $this->get_field_id('title') ) ?>"><?php _e('Title','demowidget');?></label>
				<input 
				class="widefat" 
				type="text" 
				id="<?php echo esc_attr( $this->get_field_id('title') ) ; ?>" 
				name="<?php echo esc_attr($this->get_field_name('title')) ; ?>" 
				value="<?php echo esc_attr($title); ?>">
			</p>

			<!-- Latitude -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('latitude') ) ?>"><?php _e('Latitude','demowidget');?></label>
				<input 
				class="widefat" 
				type="text" 
				id="<?php echo esc_attr( $this->get_field_id('latitude') ) ; ?>" 
				name="<?php echo esc_attr($this->get_field_name('latitude')) ; ?>" 
				value="<?php echo esc_attr($latitude); ?>">
			</p>

			<br/>

		<div class="dw-section dw-col-3">
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('title') ) ?>"><?php _e('Title','demowidget');?></label>
				<input 
				class="widefat" 
				type="text" 
				id="<?php echo esc_attr( $this->get_field_id('title') ) ; ?>" 
				name="<?php echo esc_attr($this->get_field_name('title')) ; ?>" 
				value="<?php echo esc_attr($title); ?>">
			</p>

			<!-- Latitude -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('latitude') ) ?>"><?php _e('Latitude','demowidget');?></label>
				<input 
				class="widefat" 
				type="text" 
				id="<?php echo esc_attr( $this->get_field_id('latitude') ) ; ?>" 
				name="<?php echo esc_attr($this->get_field_name('latitude')) ; ?>" 
				value="<?php echo esc_attr($latitude); ?>">
			</p>
		</div>

		<div class="dw-section dw-col-3">
			<!-- Longitute -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('longitute') ) ?>"><?php _e('Longitute','demowidget');?></label>
				<input 
				class="widefat" 
				type="text" 
				id="<?php echo esc_attr( $this->get_field_id('longitute') ) ; ?>" 
				name="<?php echo esc_attr($this->get_field_name('longitute')) ; ?>" 
				value="<?php echo esc_attr($longitute); ?>">
			</p>

			<!-- Longitute -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('email') ) ?>"><?php _e('Email','demowidget');?></label>
				<input 
				class="widefat" 
				type="text" 
				id="<?php echo esc_attr( $this->get_field_id('email') ) ; ?>" 
				name="<?php echo esc_attr($this->get_field_name('email')) ; ?>" 
				value="<?php echo esc_attr($email); ?>">
			</p>
		</div>

		<div class="dw-section dw-col-3">
			<!-- Longitute -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('longitute') ) ?>"><?php _e('Longitute','demowidget');?></label>
				<input 
				class="widefat" 
				type="text" 
				id="<?php echo esc_attr( $this->get_field_id('longitute') ) ; ?>" 
				name="<?php echo esc_attr($this->get_field_name('longitute')) ; ?>" 
				value="<?php echo esc_attr($longitute); ?>">
			</p>

			<!-- Longitute -->
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('email') ) ?>"><?php _e('Email','demowidget');?></label>
				<input 
				class="widefat" 
				type="text" 
				id="<?php echo esc_attr( $this->get_field_id('email') ) ; ?>" 
				name="<?php echo esc_attr($this->get_field_name('email')) ; ?>" 
				value="<?php echo esc_attr($email); ?>">
			</p>
		</div>


		<label for="">Some Info</label>
		<div class="wp-tab-panel">
			<ul>
				<li>
					<input type="checkbox" value="1" name="">
					<label for="">Some Data</label>
				</li>
				<li>
					<input type="checkbox" value="1" name="">
					<label for="">Some Data</label>
				</li>
				<li>
					<input type="checkbox" value="1" name="">
					<label for="">Some Data</label>
				</li>
				<li>
					<input type="checkbox" value="1" name="">
					<label for="">Some Data</label>
				</li>
			</ul>
		</div>
		<br>
		<?php
	}

	public function widget($args, $instance){
		echo $args['before_title'];
		if (isset($instance['title']) && $instance['title']!='') {
			echo $args['before_title'];
			echo apply_filters('widget_title',$instance['title']);
			echo $args['after_title'];
			?>
			<div class="demowidget <?php echo esc_attr($args['id']) ?>">
				<p>Latitude: <?php echo isset($instance['latitude']) ? $instance['latitude']:'N/A'; ?></p>
				<p>Longitute: <?php echo isset($instance['longitute']) ? $instance['longitute']:'N/A'; ?></p>
			</div>

			<?php
		}
		echo $args['after_title'];

	}

	public function update($new_instance, $old_instance){

		$instance = $new_instance;
		$instance['title'] = sanitize_text_field($instance['title']);

		$email = $new_instance['email'];
		if (!is_email($email)) {
			$new_instance['email'] = $old_instance['email'];
		}
		if (!is_numeric($new_instance['latitude'])) {
			$new_instance['latitude'] = $old_instance['latitude'];
		}
		if (!is_numeric($new_instance['longitute'])) {
			$new_instance['longitute'] = $old_instance['longitute'];
		}

		return $instance;
	}
}


