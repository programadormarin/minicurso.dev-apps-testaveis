<?php
set_include_path(PATH_SEPARATOR . __DIR__ . '/src' . PATH_SEPARATOR . '/usr/local/zend/share/pear');

require_once 'Lcobucci/Common/ClassLoader/SplClassLoader.php';

$loader = new Lcobucci\Common\ClassLoader\SplClassLoader();
$loader->register();
