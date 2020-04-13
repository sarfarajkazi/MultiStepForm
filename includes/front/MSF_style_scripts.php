<?php
/**
 * MSF Load front styles and scripts
 *
 * Manage Scripts and styles
 *
 * @since 1.0.0
 */
class MSF_style_scripts
{
    /**
     * Initial class
     *
     * @since 1.0.0
     */
    public function __construct() {
        add_action('wp_enqueue_scripts', array($this, 'msf_front_scripts'));
        add_action('wp_enqueue_scripts', array($this, 'msf_front_style'));
    }
    /**
     * Declare scripts and styles for admin
     *
     * @since 1.0.0
     *
     * @return void
     */
    public function msf_front_style(){
        wp_enqueue_style('bootstrap-min',MSF_ASSETS_CSS.'bootstrap_3.3.7.css');
        wp_register_style('range-slider',"https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css");
        wp_register_style('jquery-steps',MSF_ASSETS_CSS.'jquery.steps.css');
        wp_enqueue_style('plugin-style-file',MSF_ASSETS_CSS.'MSF_front_css.css');
    }
    public function msf_front_scripts() {
        wp_register_script('rangeSlider',"https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js",array('jquery'),false,true);
        wp_register_script('bootstrap-min-js','https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js',array('jquery'),false,true);

        wp_register_script('custom-js-validation', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js', array('jquery'), false, true);

        wp_register_script('additional-methods', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.min.js', array('jquery'), false, true);

        wp_register_script('step-form',MSF_ASSETS_JS.'jquery.steps.js',array('jquery'),false,true);
        wp_register_script('front_script',MSF_ASSETS_JS.'MSF_front_scripts.js',array('jquery'),rand(0,9999),true);
    }

}
return new MSF_style_scripts();