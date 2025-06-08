<?php

class hsHelpers {
	
    public static function get_image_src($id, $size = null) {
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($id), $size);
        return $image[0];
    }
    
    public static function removep($content){
	    $replaced = preg_replace('~</?p[^>]*>~', '', $content);
	    return $replaced;
    }
	
    public static function enqueue_styles() {
        
        wp_deregister_style('style.css');
        wp_register_style('style.css', get_bloginfo('template_url') . '/dist/style.css', false);
        wp_enqueue_style('style.css');
       
    }

    public static function enqueue_scripts() {
        
        wp_deregister_script('core.bundle');
        wp_register_script('core.bundle', get_bloginfo('template_url') . "/dist/core.bundle.js", false);
        wp_enqueue_script('core.bundle');
/*
        
        wp_deregister_script('style.bundle');
        wp_register_script('style.bundle', get_bloginfo('template_url') . "/dist/style.bundle.js", false);
        wp_enqueue_script('style.bundle');
        
*/
    }

}