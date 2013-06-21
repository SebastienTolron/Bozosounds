<?php

use Doctrine\Common\Annotations\AnnotationRegistry;

$loader = require __DIR__.'/../vendor/autoload.php';

// intl
if (!function_exists('intl_get_error_code')) {
    require_once __DIR__.'/../vendor/symfony/symfony/src/Symfony/Component/Locale/Resources/stubs/functions.php';
}

// Change nested level max for xdebug
if (false !== ini_get('xdebug.max_nesting_level')) {
    ini_set('xdebug.max_nesting_level', 500);
}
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
