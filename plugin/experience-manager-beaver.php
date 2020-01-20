<?php
/*
  Plugin Name: Experience Manager Beaver integration
  Plugin URI: https://wp-digitalexperience.com/experience-manager/
  Description: The integration for the experience platform.
  Author: Thorsten Marx
  Version: 1.0.0
  Author URI: https://wp-digitalexperience.com/
  Text Domain: tma-webtools
  Domain Path: /languages
 */
if (!defined('ABSPATH')) {
	exit;
}

define("TMA_EXPERIENCE_MANAGER_BEAVER_VERSION", "1.0.0");

define("TMA_EXPERIENCE_MANAGER_BEAVER_DIR", plugin_dir_path(__FILE__));
define("TMA_EXPERIENCE_MANAGER_BEAVER_URL", plugins_url('/', __FILE__));

require_once 'exm-beaver-autoload.php';
require_once 'includes/tma_beaver_functions.php';

add_action("plugins_loaded", "exm_beaver_plugins_loaded");


function exm_beaver_plugins_loaded() {
	tma_exm_log("load editor plugins");

	
	if (\TMA\ExperienceManager\Beaver\Plugins::getInstance()->beaverBuilder()) {
		new \TMA\ExperienceManager\Beaver\BeaverBuilder_Integration();
		\TMA\ExperienceManager\Beaver\BeaverBuilder_Preview::getInstance()->init();
	}
}