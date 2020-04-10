<?php

/**
 *
 * Handle all activates of activate/deactivate
 *
 * @since 1.0.0
 */
class MSF_Install{

    /**
     * Binding all events
     *
     * @since 1.0.0
     *
     * @return void
     */
    function __construct() {
        register_activation_hook(MSF_FILE, array($this, 'activate'));
        register_deactivation_hook(MSF_FILE, array($this, 'deactivate'));
    }

    /**
     * Placeholder for activation function
     * Nothing being called here yet.
     *
     * @since 1.0.0
     *
     * @return void
     */
    public function activate() {

    }

    /**
     * Placeholder for deactivation function
     *
     * @since 1.0.0
     *
     * @return  void
     */
    public function deactivate() {

    }

}
