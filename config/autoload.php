<?php

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
    // Modules
    'BeChangelog\Hooks' => 'system/modules/be-changelog/Hooks.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'be_changelog'           => 'system/modules/be-changelog/templates',
    'be_changelog_entry'           => 'system/modules/be-changelog/templates',
));
