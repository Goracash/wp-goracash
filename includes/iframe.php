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
			'voslitiges' => 'https://partner.juritravail.com/voslitiges/',
			'rdvmedicaux' => 'https://partner.rdvmedicaux.com/widget',
		);
		return $urls[$type];
	}

	/**
	 * @param $type
	 * @return integer
	 */
	public static function get_height_from_type($type)
	{
		$heights = array(
			'astro' => 400,
			'academic' => 400,
			'academic_subscription' => 400,
			'estimation' => 400,
			'estimation_pro' => 400,
			'juridical' => 400,
			'voslitiges' => 400,
			'rdvmedicaux' => 266,
		);
		return $heights[$type];
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
			'rdvmedicaux' => __('Health - RDVMédicaux', 'goracash')
		);
	}
}