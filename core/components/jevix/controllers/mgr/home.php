<?php
/**
 * Loads the home page.
 *
 * @package jevix
 * @subpackage controllers
 */
$modx->regClientStartupScript($Jevix->config['jsUrl'].'mgr/widgets/items.grid.js');
$modx->regClientStartupScript($Jevix->config['jsUrl'].'mgr/widgets/home.panel.js');
$modx->regClientStartupScript($Jevix->config['jsUrl'].'mgr/sections/home.js');
$output = '<div id="jevix-panel-home-div"></div>';

return $output;
