<?php

namespace TMA\ExperienceManager\Beaver;

/**
 * Description of Plugins
 *
 * @author marx
 */
class Plugins {

	protected static $_instance = null;

	public static function getInstance() {
		if (null === self::$_instance) {
			self::$_instance = new self;
		}
		return self::$_instance;
	}

	protected function __clone() {
		
	}

	private $plugins;

	protected function __construct() {
		$this->plugins = apply_filters('active_plugins', get_option('active_plugins'));
	}

	public function beaverBuilder() {
		return class_exists('FLBuilder');
	}
}
