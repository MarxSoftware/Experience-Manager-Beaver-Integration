<?php

define("EXM_BEAVER_CLASSES", array(
	// Beaver Builder
	"TMA\ExperienceManager\Beaver\BeaverBuilder_Integration" => "includes/modules/editors/beaver/class.beaverbuilder_integration.php",
	"TMA\ExperienceManager\Beaver\BeaverBuilder_Preview" => "includes/modules/editors/beaver/class.beaverbuilder.preview.php",
	"TMA\ExperienceManager\Beaver\Plugins" => "includes/class.plugins.php",
	
));

function tma_webtools_beaver_autoload($class_name) {
	if (array_key_exists($class_name, EXM_BEAVER_CLASSES)) {
		require_once TMA_EXPERIENCE_MANAGER_BEAVER_DIR . "/" . EXM_BEAVER_CLASSES[$class_name];
	}
}

spl_autoload_register('tma_webtools_beaver_autoload');
