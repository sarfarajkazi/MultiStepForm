<?php
/*
Plugin Name: Multi Step Form
Plugin URI: https://soften.io
Description: Create Multistep form.
Version: 1.0
Author: Soften Web Media
Author URI: http://soften.io
*/

/* don't call the file directly */
if ( !DEFINED( 'ABSPATH' ) ) exit;

DEFINE( 'MSF_FILE', __FILE__ );
require_once 'includes/MSF_Class.php';
/**
 * Initial plugin
 */
MSF_Class::init();