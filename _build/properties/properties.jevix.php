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
		'name' => 'debug'
		,'desc' => 'debug'
		,'type' => 'combo-boolean'
		,'value' => 'false'
		,'lexicon' => 'jevix:properties'
	)
	,array(
		'name' => 'logErrors'
		,'desc' => 'logErrors'
		,'type' => 'combo-boolean'
		,'value' => 'false'
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
		,'value' => 'p,a,img,i,b,u,em,strong,nobr,li,ol,ul,sup,abbr,pre,acronym,h1,h2,h3,h4,h5,h6,cut,br,code,table,tr,th,td'
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
		,'value' => '[["+/-","(c)","(с)","(r)","(C)","(С)","(R)"],["±","©","©","®","©","©","®"]]'
		,'lexicon' => 'jevix:properties'
	)
	,array(
		'name' => 'cfgSetTagChilds'
		,'desc' => 'cfgSetTagChilds'
		,'type' => 'textfield'
		,'value' => '[["ul",["li"],false,true],["ol",["li"],false,true],["table",["tr"],false,true],["tr",["td","th"],false,true]]'
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
		,'value' => 'ul,ol,object,table,tr'
		,'lexicon' => 'jevix:properties'
	)
	,array(
		'name' => 'cfgSetTagNoTypography'
		,'desc' => 'cfgSetTagNoTypography'
		,'type' => 'textfield'
		,'value' => 'pre,code,video'
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
		,'value' => 'pre,code,video'
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
	,array(
		'name' => 'cfgSetTagBlockType'
		,'desc' => 'cfgSetTagBlockType'
		,'type' => 'textfield'
		,'value' => '["h4","h5","h6","ol","ul","blockquote","pre","code"]'
		,'lexicon' => 'jevix:properties'
	)
	,array(
		'name' => 'cfgSetAutoPregReplace'
		,'desc' => 'cfgSetAutoPregReplace'
		,'type' => 'textfield'
		,'value' => '[["\/<video>http:\\\/\\\/(?:www\\.|)youtube\\.com\\\/watch\\?v=([a-zA-Z0-9_\\-]+)(&.+)?<\\\/video>\/Ui","\/<video>http:\\\/\\\/(?:www\\.|)youtu\\.be\\\/([a-zA-Z0-9_\\-]+)(&.+)?<\\\/video>\/Ui"],["<iframe width=\"700\" height=\"394\" src=\"http:\/\/www.youtube.com\/embed\/$1\" frameborder=\"0\" allowfullscreen><\/iframe>","<iframe width=\"700\" height=\"394\" src=\"http:\/\/www.youtube.com\/embed\/$1\" frameborder=\"0\" allowfullscreen><\/iframe>"]]'
		,'lexicon' => 'jevix:properties'
	)
);

return $properties;