<?php

/**
 * Properties for the Jevix snippet.
 *
 * @package jevix
 * @subpackage build
 */
$properties = array();

$tmp = array(
	'input' => array(
		'type' => 'textfield',
		'value' => '',
	),
	'debug' => array(
		'type' => 'combo-boolean',
		'value' => false,
	),
	'logErrors' => array(
		'type' => 'combo-boolean',
		'value' => false,
	),
	'escapeTags' => array(
		'type' => 'combo-boolean',
		'value' => false,
	),

	'cfgAllowTagParams' => array(
		'type' => 'textarea',
		'value' => '{"a":["title","href"],"img":{"0":"src","alt":"#text","1":"title","align":["right","left","center"],"width":"#int","height":"#int","hspace":"#int","vspace":"#int"}}',
	),
	'cfgAllowTags' => array(
		'type' => 'textarea',
		'value' => 'p,a,img,i,b,u,em,strong,nobr,li,ol,ul,sup,abbr,pre,acronym,h1,h2,h3,h4,h5,h6,cut,br,code,table,tr,th,td,video,hr',
	),

	'cfgSetAutoBrMode' => array(
		'type' => 'combo-boolean',
		'value' => true,
	),
	'cfgSetAutoLinkMode' => array(
		'type' => 'combo-boolean',
		'value' => true,
	),

	'cfgSetAutoReplace' => array(
		'type' => 'textarea',
		'value' => '[["+/-","(c)","(с)","(r)","(C)","(С)","(R)"],["±","©","©","®","©","©","®"]]',
	),
	'cfgSetAutoPregReplace' => array(
		'type' => 'textarea',
		'value' => '[["\/<video>(http|https):\\\\\/\\\\\/(?:www\\\\.|)youtube\\\\.com\\\\\/watch\\\\?v=([a-zA-Z0-9_\\\\-]+)(&.+)?<\\\\\/video>\/Ui","\/<video>(http|https):\\\\\/\\\\\/(?:www\\\\.|)youtu\\\\.be\\\\\/([a-zA-Z0-9_\\\\-]+)(&.+)?<\\\\\/video>\/Ui"],["<iframe width=\"700\" height=\"394\" src=\"$1:\/\/www.youtube.com\/embed\/$2\" frameborder=\"0\" allowfullscreen><\/iframe>","<iframe width=\"700\" height=\"394\" src=\"$1:\/\/www.youtube.com\/embed\/$2\" frameborder=\"0\" allowfullscreen><\/iframe>"]]',
	),

	'cfgSetTagChilds' => array(
		'type' => 'textarea',
		'value' => '[["ul",["li"],false,true],["ol",["li"],false,true],["table",["tr"],false,true],["tr",["td","th"],false,true]]',
	),
	'cfgSetTagCutWithContent' => array(
		'type' => 'textarea',
		'value' => 'script,object,iframe,style',
	),
	'cfgSetTagNoAutoBr' => array(
		'type' => 'textarea',
		'value' => 'ul,ol,object,table,tr',
	),
	'cfgSetTagParamDefault' => array(
		'type' => 'textarea',
		'value' => '[["a","rel",null,true]]',
	),
	'cfgSetTagParamsRequired' => array(
		'type' => 'textarea',
		'value' => '{"img":["src"],"a":["href"]}',
	),

	'cfgSetTagNoTypography' => array(
		'type' => 'textarea',
		'value' => 'pre,code,video',
	),
	'cfgSetTagPreformatted' => array(
		'type' => 'textarea',
		'value' => 'pre,code',
	),
	'cfgSetTagBlockType' => array(
		'type' => 'textarea',
		'value' => '["h4","h5","h6","ol","ul","blockquote","pre","code","video"]',
	),
	'cfgSetTagShort' => array(
		'type' => 'textarea',
		'value' => 'br,img,hr,cut',
	),
	'cfgSetTagIsEmpty' => array(
		'type' => 'textarea',
		'value' => '',
	),

	'cfgSetXHTMLMode' => array(
		'type' => 'combo-boolean',
		'value' => false,
	),
);

foreach ($tmp as $k => $v) {
	$properties[] = array_merge(
		array(
			'name' => $k,
			'desc' => PKG_NAME_LOWER . '_prop_' . $k,
			'lexicon' => PKG_NAME_LOWER . ':properties',
		), $v
	);
}

return $properties;