<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'View\\' => array($baseDir . '/src/views'),
    'Model\\' => array($baseDir . '/src/models'),
    'Layout\\' => array($baseDir . '/src/kernel/layout'),
    'Kernel\\' => array($baseDir . '/src/kernel'),
    'Database\\' => array($baseDir . '/src/kernel/database'),
    'Controller\\' => array($baseDir . '/src/controllers'),
    'Contracts\\' => array($baseDir . '/src/contracts'),
    'Behave\\' => array($baseDir . '/src/behaviours'),
    'App\\' => array($baseDir . '/src'),
);
