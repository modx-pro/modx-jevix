<?php
/**
 * Properties for the Jevix snippet.
 *
 * @package jevix
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'tpl',
        'desc' => 'prop_jevix.tpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'Item',
        'lexicon' => 'jevix:properties',
    ),
    array(
        'name' => 'sortBy',
        'desc' => 'prop_jevix.sortby_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'name',
        'lexicon' => 'jevix:properties',
    ),
    array(
        'name' => 'sortDir',
        'desc' => 'prop_jevix.sortdir_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'ASC',
        'lexicon' => 'jevix:properties',
    ),
    array(
        'name' => 'limit',
        'desc' => 'prop_jevix.limit_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 5,
        'lexicon' => 'jevix:properties',
    ),
    array(
        'name' => 'outputSeparator',
        'desc' => 'prop_jevix.outputseparator_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'jevix:properties',
    ),
    array(
        'name' => 'toPlaceholder',
        'desc' => 'prop_jevix.toplaceholder_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => true,
        'lexicon' => 'jevix:properties',
    ),
/*
    array(
        'name' => '',
        'desc' => 'prop_jevix.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'jevix:properties',
    ),
    */
);

return $properties;