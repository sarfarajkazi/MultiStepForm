<?php

/**
 * MSF class.
 *
 * Initialize all hooks
 *
 * @since 1.0.0
 */
class MSF_Class {

    /**
     * @var object
     *
     * @since 1.0.0
     */
    private static $instance;

    /**
     * Create class object
     *
     * Checks for an existing MSF() instance
     * and if it doesn't find one, creates it.
     *
     * @return MSF_Class|object
     * @since 0.1.1
     *
     */
    public static function init() {
        if (is_null(self::$instance)) {
            self::$instance = new MSF_Class();
            self::$instance->msf_setup();
        }

        return self::$instance;
    }

    /**
     * Setup the plugin
     *
     * Sets up all the appropriate hooks and actions within our plugin.
     *
     * @since 1.0.0
     *
     * @return void
     *
     */
    private function msf_setup() {
        // Define constants
        $this->msf_define_constants();
        // Include required files
        $this->msf_includes();
        // instantiate classes
        $this->msf_instantiate();
        // Initialize the action hooks
        $this->msf_init_actions();
    }

    /**
     * Define the plugin constants
     *
     * @return void
     */
    private function msf_define_constants() {
        DEFINE('MSF_PATH', dirname(MSF_FILE));
        DEFINE('MSF_URL', plugin_dir_url(MSF_FILE));
        DEFINE('MSF_ASSETS', MSF_URL . 'assets');
        DEFINE('MSF_CLASS', MSF_PATH . '/classes');
        DEFINE('MSF_INCLUDES', MSF_PATH . '/includes');
        DEFINE('MSF_ADMIN_TEMPLATES', MSF_PATH . 'includes/admin/templates');
        DEFINE('MSF_FRONT_TEMPLATES', MSF_PATH . 'includes/front/templates');
    }

    /**
     * Include the required files
     *
     * @return void
     */
    private function msf_includes() {

    }

    /**
     * Instantiate classes
     *
     * @since 1.0.0
     *
     * @return void
     */
    private function msf_instantiate() {
        if (is_admin()) {
            new MSF_INSTALL();
        }
    }

    /**
     * Instantiate hooks
     *
     * @since 1.0.0
     *
     * @return void
     */
    private function msf_init_actions() {

    }
}
