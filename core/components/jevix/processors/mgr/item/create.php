<?php
/**
 * Create an Item
 * 
 * @package jevix
 * @subpackage processors
 */
$alreadyExists = $modx->getObject('JevixItem',array(
    'name' => $_POST['name'],
));
if ($alreadyExists) {
    $modx->error->addField('name',$modx->lexicon('jevix.item_err_ae'));
}

if ($modx->error->hasError()) {
    return $modx->error->failure();
}

$item = $modx->newObject('JevixItem');
$item->fromArray($_POST);

if ($item->save() == false) {
    return $modx->error->failure($modx->lexicon('jevix.item_err_save'));
}

return $modx->error->success('',$item);