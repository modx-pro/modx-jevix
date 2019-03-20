<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
            break;
        case xPDOTransport::ACTION_UPGRADE:
            /** @var modCategory $category */
            if ($category = $modx->getObject('modCategory', ['category' => 'Jevix'])) {
                $category->remove();
            }
            break;
        case xPDOTransport::ACTION_UNINSTALL:
            break;
    }
}

return true;