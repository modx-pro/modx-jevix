<?php
/**
 * Resolve creating db tables
 *
 * @package jevix
 * @subpackage build
 */
if ($object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
            $modx =& $object->xpdo;
            $modelPath = $modx->getOption('jevix.core_path',null,$modx->getOption('core_path').'components/jevix/').'model/';
            $modx->addPackage('jevix',$modelPath);

            $manager = $modx->getManager();

            $manager->createObjectContainer('JevixItem');

            break;
        case xPDOTransport::ACTION_UPGRADE:
            break;
    }
}
return true;