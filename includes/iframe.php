<?php

include_once plugin_dir_path(__FILE__) . '/iframe.widget.php';

class Goracash_Iframe
{
	public function __construct()
	{
		add_action('widgets_init', function() {
			register_widget('Goracash_Iframe_Widget');
		});
	}

	/**
	 * @param $type
	 * @return string
	 */
	public static function get_url_from_type($type)
	{
		$urls = array(
			'astro' => 'https://www.news-voyance.com/fr_FR/iframe/',
			'academic' => 'http://www.bonne-note.com/iframe/',
			'academic_subscription' => 'http://www.bonne-note.com/entrainement-en-ligne/iframe/',
			'estimation' => 'http://www.vos-devis.com/iframe/',
			'estimation_pro' => 'http://pro.vos-devis.com/iframe/',
			'juridical' => 'https://partner.juritravail.com/',
			'voslitiges' => 'https://partner.juritravail.com/voslitiges/'
		);
		return $urls[$type];
	}

	/**
	 * @return array
	 */
	public static function get_types()
	{
		return array(
			'astro' => __('Astrology / Fortune Telling', 'goracash'),
			'academic' => __('In-Home Tutoring', 'goracash'),
			'academic_subscription' => __('Academic Subscription', 'goracash'),
			'estimation' => __('Home Renovation Quote', 'goracash'),
			'estimation_pro' => __('Home Renovaton Quote - PRO', 'goracash'),
			'juridical' => __('Law', 'goracash'),
			'voslitiges' => __('Law - Vos Litiges', 'goracash'),
		);
	}
}