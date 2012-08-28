<?php
/**
 * @package jevix
 * @subpackage controllers
 */
require_once dirname(dirname(__FILE__)).'/model/jevix/jevix.class.php';
$jevix = new Jevix($modx);
return $jevix->initialize('mgr');