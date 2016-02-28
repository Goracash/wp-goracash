<?php

class Goracash_Iframe_Widget extends WP_Widget
{

	public function __construct()
	{
		parent::__construct('goracash_iframe', __('Goracash Iframe', 'goracash'), array(
			'description' => __('Lead capture form', 'goracash'),
		));
	}

	public function get_dropdown($values, $value)
	{
		$content = '';
		foreach ($values as $key => $label) {
			$content .= sprintf('<option value="%s" %s>%s</option>',
				$key,
				$key == $value ? 'selected="selected"' : '',
				$label
			);
		}
		return $content;
	}

	public function widget($args, $instance)
	{
		echo $args['before_widget'];
		echo $args['before_title'];
		echo apply_filters('widget_title', $instance['title']);
		echo $args['after_title'];

		$type = isset($instance['type']) ? $instance['type'] : 'astro';
		$idw = get_option('goracash_idw', '1234');
		$tracker = isset($instance['tracker']) ? $instance['tracker'] : '';
		printf('<iframe src="%s?idw=%s&%tracker&app=wordpress" border="0" frameborder="0" width="100%%" height="%spx"></iframe>',
			Goracash_Iframe::get_url_from_type($type),
			$idw,
			$tracker,
			Goracash_Iframe::get_height_from_type($type)
		);
		echo $args['after_widget'];
	}

	public function form($instance)
	{
		$type = isset($instance['type']) ? $instance['type'] : '';

		printf(
			'<p>
				<label for="%s">%s :</label>
				<input class="widefat" id="%s" name="%s" type="text" value="%s" />
			</p>
			<p>
				<label for="%s">%s :</label>
				<select class="widefat" id="%s" name="%s">
					%s
				</select>
			</p>
			<p>
				<label for="%s">%s :</label>
				<input class="widefat" id="%s" name="%s" type="text" value="%s" />
			</p>',
			$this->get_field_name('title'),
			__('Title', 'goracash'),
			$this->get_field_id('title'),
			$this->get_field_name('title'),
			isset($instance['title']) ? $instance['title'] : '',
			$this->get_field_name('type'),
			__('Type', 'goracash'),
			$this->get_field_id('type'),
			$this->get_field_name('type'),
			$this->get_dropdown(Goracash_Iframe::get_types(), $type),
			$this->get_field_name('tracker'),
			__('Your tracker', 'goracash'),
			$this->get_field_id('tracker'),
			$this->get_field_name('tracker'),
			isset($instance['tracker']) ? $instance['tracker'] : ''
		);
	}

}