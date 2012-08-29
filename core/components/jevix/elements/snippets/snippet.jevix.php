<?php
if (!empty($scriptProperties['debug'])) {
	ini_set('display_errors', 1);
	ini_set('error_reporting', -1);
	$modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
}

$modx->Jevix = $modx->getService('jevix','Jevix',$modx->getOption('core_path').'components/jevix/model/jevix/',$scriptProperties);
if (!($modx->Jevix instanceof Jevix)) return '';

$modx->Jevix->setParams($scriptProperties);

$errors = null;
$text = $modx->Jevix->parse($input, $errors);

if (!empty($errors)) {
	$modx->log(modX::LOG_LEVEL_INFO, print_r($errors,1));
}
return $text;