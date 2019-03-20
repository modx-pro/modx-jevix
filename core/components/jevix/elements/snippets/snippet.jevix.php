<?php
/** @var array $scriptProperties */
/** @var ModxJevix $Jevix */
if (!$modx->loadClass('jevix', MODX_CORE_PATH . 'components/jevix/model/', false, true)) {
    return 'Could not load Jevix!';
} elseif (empty($input)) {
    return '';
}

if (!empty($options) && is_string($options) && $options[0] == '{') {
    $scriptProperties = json_decode($options, true);
}

$Jevix = new ModxJevix($modx, $scriptProperties);
$processed = $Jevix->process($input);

if (!empty($scriptProperties['escapeTags'])) {
    $processed = str_replace(['[', ']', '`', '{', '}'], ['&#91;', '&#93;', '&#96;', '&#123;', '&#125;'], $processed);
}

return $processed;