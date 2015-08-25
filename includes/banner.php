<?php

include_once plugin_dir_path(__FILE__) . '/banner.widget.php';

class Goracash_Banner
{
    public static $default_params = array(
        'thematic' => '',
        'tracker' => '',
        'defaultLanguage' => '',
        'defaultMarket' => '',
        'minWidth' => '',
        'maxWidth' => '',
        'minHeight' => '',
        'maxHeight' => '',
    );

    public function __construct()
    {
        add_action('widgets_init', function() {
            register_widget('Goracash_Banner_Widget');
        });
        add_action('wp_head', array($this, 'add_front_javascript'));
        add_shortcode('goracash_banner', array($this, 'add_shortcode'));
    }

    /**
     * @return array
     */
    public static function get_thematics()
    {
        return array(
            'ASTRO' => __('Astrology / Fortune Telling', 'goracash'),
            'PSYCHO' => __('Psychology', 'goracash'),
            'TEACH' => __('In-Home Tutoring', 'goracash'),
            'DEVIS' => __('Home Renovation Quote', 'goracash'),
            'JURI' => __('Law', 'goracash'),
            'SPONSORSHIP' => __('Sponsorship', 'goracash'),
        );
    }

    /**
     * @return array
     */
    public static function get_langs()
    {
        return array(
            'fr_FR' => __('French', 'goracash'),
            'es_ES' => __('Spanish', 'goracash'),
        );
    }

    /**
     * @return array
     */
    public static function get_markets()
    {
        return array(
            'france' => __('French', 'goracash'),
            'spain' => __('Spanish', 'goracash'),
        );
    }

    /**
     * @param $atts
     * @return string
     */
    public function add_shortcode($atts)
    {
        $data = array();
        foreach (Goracash_Banner::$default_params as $key => $default) {
            $shortcode_key = strtolower($key);
            $data[$key] = isset($atts[$shortcode_key]) ? $atts[$shortcode_key] : $default;
        }

        $args = array(
            'before_widget' => '<div class="box widget scheme-light">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="widget-title">',
            'after_title'   => '</div>',
        );

        ob_start();
        the_widget('Goracash_Banner_Widget', $data, $args);
        $output = ob_get_clean();
        return $output;
    }

    public function add_front_javascript()
    {
        printf("<script type='text/javascript'>
                    (function(w, d, s, u, o, e, c){
                        w['GoracashObject'] = o; w[o] = w[o] || function() { (w[o].q = w[o].q || []).push(arguments) },
                        w[o].l = 1 * new Date(); e = d.createElement(s), c = d.getElementsByTagName(s)[0]; e.async = 1;
                        e.src = u; c.parentNode.insertBefore(e, c);
                    }) (window, document, 'script', '//cdn.goracash.com/general.js', 'goracash');
                    goracash('create', 'GCO-%s');
                    goracash('set', 'forceSSL', %s);
                    goracash('set', 'thematic', '%s');
                    goracash('set', 'defaultLanguage', '%s');
                    goracash('set', 'defaultMarket', '%s');
                    %s
                    %s
                </script>",
            get_option('goracash_idw', '1234'),
            get_option('goracash_ads_force_ssl') ? 'true' : 'false',
            get_option('goracash_ads_thematic', 'ASTRO'),
            get_option('goracash_ads_default_lang', 'fr_FR'),
            get_option('goracash_ads_default_market', 'french'),
            get_option('goracash_ads_popexit') ? "goracash('exit');" : '',
            get_option('goracash_ads_top_bar') ? "goracash('top-bar');" : ''
        );
    }
}