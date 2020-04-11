<?php

/**
 * MSF Load front styles and scripts
 *
 * Manage Short codes
 *
 * @since 1.0.0
 */
class MSF_shortcodes
{
    /**
     * Initial class
     *
     * @since 1.0.0
     */
    public function __construct()
    {
        add_shortcode('display_form', array($this, 'display_form_callback'));
        add_action('init', array($this, 'submit_form_callback'));
    }

    function display_form_callback()
    {
        ob_start();
        include_once 'templates/form_layout.php';
        wp_enqueue_style("range-slider");
        wp_enqueue_style("jquery-steps");
        wp_enqueue_script('rangeSlider');
        wp_enqueue_script('step-form');
        wp_enqueue_script('custom-js-validation');
        wp_enqueue_script('additional-methods');
        wp_enqueue_script('bootstrap-min-js');
        wp_enqueue_script('front_script');
        $html = ob_get_contents();
        ob_clean();
        return $html;
    }

    function submit_form_callback()
    {
        if (isset($_POST['form-nonce']) && wp_verify_nonce($_POST['form-nonce'], 'submit-form')) {
            pr($_POST, 1);
        }
    }
}

return new MSF_shortcodes();