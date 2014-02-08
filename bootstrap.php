<?php

require_once 'SplClassLoader.php';

$classLoader = new SplClassLoader('Drupal', dirname(__FILE__) . '/lib');
$classLoader->register();