<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'BeChangelog',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'BeChangelog\Hooks' => 'system/modules/be-changelog/classes/Hooks.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_changelog'       => 'system/modules/be-changelog/templates',
	'be_changelog_entry' => 'system/modules/be-changelog/templates',
));
