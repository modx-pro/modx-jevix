<?php
/**
 * Add snippets to build
 * 
 * @package jevix
 * @subpackage build
 */
$snippets = array();

$snippets[0]= $modx->newObject('modSnippet');
$snippets[0]->fromArray(array(
    'id' => 0,
    'name' => 'Jevix',
    'description' => 'Displays Items.',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.jevix.php'),
),'',true,true);
$properties = include $sources['build'].'properties/properties.jevix.php';
$snippets[0]->setProperties($properties);
unset($properties);

return $snippets;