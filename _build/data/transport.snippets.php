<?php
/**
 * Add snippets to build
 * 
 * @package jevix
 * @subpackage build
 */
$snippets = array();
$properties = include $sources['build'].'properties/properties.jevix.php';

$snippets[0]= $modx->newObject('modSnippet');
$snippets[0]->fromArray(array(
    'id' => 0,
    'name' => 'Jevix',
    'description' => 'HTML validator and filter',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.jevix.php'),
),'',true,true);
$snippets[0]->setProperties($properties[0]);


unset($properties);
return $snippets;