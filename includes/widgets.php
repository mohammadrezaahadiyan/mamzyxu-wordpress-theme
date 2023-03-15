<?php

class UserInformation extends WP_Widget

{
	function __construct() {
		parent::__construct( false, 'اطلاعات کاربری');
	}

	function widget( $args, $instance )
	{
		echo $args['before_widget'];
		echo $args['before_title'];
		echo $instance['title'];
		echo $args['after_titile'];

		echo 'نمایش اطلااعات کاربر:';

		echo $args['after_widget'];


	}

	function form( $instance )
	{
		$title = !empty($instance['title']) ? $instance['title'] : 'عنوان را وارد کنید'; ?>

		<label for="<?php echo esc_attr($this->get_field_id('title'));?>"<?php esc_attr('title', 'text_domain'); ?> ></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title'));?>" name="<?php echo esc_attr($this->get_field_name('title'));?>" type="text" value="<?php echo esc_attr($title);?>" >


		<?php


	}

	function update( $new_instance, $old_instance )

    {
        $instance = [];
        $instance['title'] = !empty($new_instance['title']) ? sanitize_text_field($new_instance['title']) : '';
        return $instance;


    }

}
function Custom_widget_register()

{
	register_widget('UserInformation');
}


add_action('widgets_init', 'Custom_widget_register');
