<?php

/**
 * MSF Front
 *
 * Manage Actions
 *
 * @since 1.0.0
 */
class MSF_Front {

    /**
     * Initial class
     *
     * @since 1.0.0
     */
    public function __construct() {
        add_action('wp_enqueue_scripts', array($this, 'msf_front_scripts'));
    }
    /**
     * Declare scripts and styles for admin
     *
     * @since 1.0.0
     *
     * @return void
     */
    public function msf_front_scripts() {
    }

}
