<?php
/**
 * Properties for the Jevix snippet.
 *
 * @package jevix
 * @subpackage build
 */
$properties = array();

$properties[0] = array(
	array(
		'name' => 'input'
		,'desc' => 'input'
		,'type' => 'textfield'
		,'value' => ''
		,'lexicon' => 'jevix:properties'
	)
	,array(
		'name' => 'cfgAllowTagParams'
		,'desc' => 'cfgAllowTagParams'
		,'type' => 'textfield'
		,'value' => '{"a":["title","href"],"img":{"0":"src","alt":"#text","1":"title","align":["right","left","center"],"width":"#int","height":"#int","hspace":"#int","vspace":"#int"}}'
		,'lexicon' => 'jevix:properties'
	)
	,array(
		'name' => 'cfgAllowTags'
		,'desc' => 'cfgAllowTags'
		,'type' => 'textfield'
		,'value' => 'a,img,i,b,u,em,strong,nobr,li,ol,ul,sup,abbr,pre,acronym,h1,h2,h3,h4,h5,h6,cut,br,code'
		,'lexicon' => 'jevix:properties'
	)
	,array(
		'name' => 'cfgSetAutoBrMode'
		,'desc' => 'cfgSetAutoBrMode'
		,'type' => 'combo-boolean'
		,'value' => true
		,'lexicon' => 'jevix:properties'
	)
	,array(
		'name' => 'cfgSetAutoLinkMode'
		,'desc' => 'cfgSetAutoLinkMode'
		,'type' => 'combo-boolean'
		,'value' => true
		,'lexicon' => 'jevix:properties'
	)
	,array(
		'name' => 'cfgSetAutoReplace'
		,'desc' => 'cfgSetAutoReplace'
		,'type' => 'textfield'
		,'value' => '[["+/-","(c)","(r)"],["±","©","®"]]'
		,'lexicon' => 'jevix:properties'
	)
	,array(
		'name' => 'cfgSetTagChilds'
		,'desc' => 'cfgSetTagChilds'
		,'type' => 'textfield'
		,'value' => '[["ul","li",true,true],["ol","li",true,true]]'
		,'lexicon' => 'jevix:properties'
	)
	,array(
		'name' => 'cfgSetTagCutWithContent'
		,'desc' => 'cfgSetTagCutWithContent'
		,'type' => 'textfield'
		,'value' => 'script,object,iframe,style'
		,'lexicon' => 'jevix:properties'
	)
	,array(
		'name' => 'cfgSetTagNoAutoBr'
		,'desc' => 'cfgSetTagNoAutoBr'
		,'type' => 'textfield'
		,'value' => 'ul,ol'
		,'lexicon' => 'jevix:properties'
	)
	,array(
		'name' => 'cfgSetTagNoTypography'
		,'desc' => 'cfgSetTagNoTypography'
		,'type' => 'textfield'
		,'value' => 'code'
		,'lexicon' => 'jevix:properties'
	)
	,array(
		'name' => 'cfgSetTagParamDefault'
		,'desc' => 'cfgSetTagParamDefault'
		,'type' => 'textfield'
		,'value' => '[["a","rel",null,true]]'
		,'lexicon' => 'jevix:properties'
	)
	,array(
		'name' => 'cfgSetTagParamsRequired'
		,'desc' => 'cfgSetTagParamsRequired'
		,'type' => 'textfield'
		,'value' => '{"img":["src"],"a":["href"]}'
		,'lexicon' => 'jevix:properties'
	)
	,array(
		'name' => 'cfgSetTagPreformatted'
		,'desc' => 'cfgSetTagPreformatted'
		,'type' => 'textfield'
		,'value' => 'pre'
		,'lexicon' => 'jevix:properties'
	)
	,array(
		'name' => 'cfgSetTagShort'
		,'desc' => 'cfgSetTagShort'
		,'type' => 'textfield'
		,'value' => 'br,img'
		,'lexicon' => 'jevix:properties'
	)
	,array(
		'name' => 'cfgSetTagIsEmpty'
		,'desc' => 'cfgSetTagIsEmpty'
		,'type' => 'textfield'
		,'value' => ''
		,'lexicon' => 'jevix:properties'
	)
	,array(
		'name' => 'cfgSetXHTMLMode'
		,'desc' => 'cfgSetXHTMLMode'
		,'type' => 'combo-boolean'
		,'value' => false
		,'lexicon' => 'jevix:properties'
	)
);

return $properties;