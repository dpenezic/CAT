<?php
/* 
 *******************************************************************************
 * Copyright 2011-2017 DANTE Ltd. and GÉANT on behalf of the GN3, GN3+, GN4-1 
 * and GN4-2 consortia
 *
 * License: see the web/copyright.php file in the file structure
 *******************************************************************************
 */

require_once (__DIR__ . "/../core/autoloader/Psr4Autoloader.php");
use core\autoloader\Psr4Autoloader;

// instantiate the loader
$loader = new Psr4Autoloader();

// register the autoloader
$loader->register();

// register the base directories for the namespace prefix
// include CAT/core library
$loader->addNamespace('core', __DIR__ . "/../core");
// include CAT/web/admin/lib library
$loader->addNamespace('lib', __DIR__ . "/../web/admin/lib");
