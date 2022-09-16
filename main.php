<?php

define('PATH_ROOT', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('PATH_INTERFACES', PATH_ROOT . 'interfaces' . DIRECTORY_SEPARATOR);


require_once PATH_INTERFACES . 'ResourceCollectorInterface.php';
require_once PATH_ROOT . 'ResourceCollector.php';

print "Hello! :-)";
