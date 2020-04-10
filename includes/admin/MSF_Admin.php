<?php

/**
 * MSF Admin
 *
 * Manage Actions
 *
 * @since 1.0.0
 */
class MSF_Admin
{

    /**
     * Initial class
     *
     * @since 1.0.0
     */
    public function __construct()
    {
        add_action('admin_enqueue_scripts', array($this, 'msf_admin_scripts'));
    }

    /**
     * Declare scripts and styles for admin
     *
     * @return void
     * @since 1.0.0
     *
     */
    public function msf_admin_scripts()
    {

    }

}
