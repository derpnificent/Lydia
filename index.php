<?php
//
// PHASE: BOOTSTRAP
//
define('LYDIA_INSTALL_PATH', dirname(__FILE__));
define('LYDIA_SITE_PATH', LYDIA_INSTALL_PATH . '/site');

require(LYDIA_INSTALL_PATH.'/src/bootstrap.php');

$de = CDerp::Instance();


//
// PHASE: FRONTCONTROLLER ROUTE
//
$de->FrontControllerRoute();

//
// PHASE: THEME ENGINE RENDER
//
$de->ThemeEngineRender();

