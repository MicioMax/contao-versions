<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'HeimrichHannot',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Model
	'HeimrichHannot\Versions\VersionModel' => 'system/modules/versions/model/VersionModel.php',

	// Classes
	'HeimrichHannot\Versions\Automator'    => 'system/modules/versions/classes/Automator.php',
	'HeimrichHannot\Versions\Version'      => 'system/modules/versions/classes/Version.php',
	'HeimrichHannot\Versions\VersionUser'  => 'system/modules/versions/classes/VersionUser.php',
));
