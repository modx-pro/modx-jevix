<?php
/**
 * Jevix Connector
 *
 * @package jevix
 */
require_once dirname(dirname(dirname(dirname(__FILE__)))).'/config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CONNECTORS_PATH.'index.php';

$corePath = $modx->getOption('jevix.core_path',null,$modx->getOption('core_path').'components/jevix/');
require_once $corePath.'model/jevix/jevix.class.php';
$modx->jevix = new Jevix($modx);

$modx->lexicon->load('jevix:default');

/* handle request */
$path = $modx->getOption('processorsPath',$modx->jevix->config,$corePath.'processors/');
$modx->request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));