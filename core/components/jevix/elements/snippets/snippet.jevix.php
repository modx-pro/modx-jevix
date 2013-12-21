<?php
/** @var array $scriptProperties */
/** @var Jevix $Jevix */
if (!$modx->loadClass('jevix', MODX_CORE_PATH . 'components/jevix/model/jevix/', false, true)) {
	return 'Could not load Jevix!';
}
$Jevix = new Jevix($modx, $scriptProperties);

return $Jevix->process($scriptProperties['input']);