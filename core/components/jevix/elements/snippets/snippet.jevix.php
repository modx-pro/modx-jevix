<?php
/** @var array $scriptProperties */
/** @var Jevix $Jevix */
if (!$modx->loadClass('jevix', MODX_CORE_PATH . 'components/jevix/model/jevix/', false, true)) {
	return 'Could not load Jevix!';
}
elseif (empty($input)) {
	return '';
}

if (!empty($options) && is_string($options) && $options[0] == '{') {
	$scriptProperties = $modx->fromJSON($options);
}

$Jevix = new Jevix($modx, $scriptProperties);
$processed = $Jevix->process($input);

if (!empty($scriptProperties['escapeTags'])) {
	$processed = str_replace(
		array('[', ']', '`', '{', '}'),
		array('&#91;', '&#93;', '&#96;', '&#123;', '&#125;'),
		$processed
	);
}

return $processed;