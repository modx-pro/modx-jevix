<?php

$properties = [];

$tmp = [
    'input' => [
        'type' => 'textfield',
        'value' => '',
    ],
    'debug' => [
        'type' => 'combo-boolean',
        'value' => false,
    ],
    'logErrors' => [
        'type' => 'combo-boolean',
        'value' => false,
    ],
    'escapeTags' => [
        'type' => 'combo-boolean',
        'value' => false,
    ],

    'cfgAllowTagParams' => [
        'type' => 'textarea',
        'value' => '{"a":["title","href"],"img":{"0":"src","alt":"#text","1":"title","align":["right","left","center"],"width":"#int","height":"#int","hspace":"#int","vspace":"#int"}}',
    ],
    'cfgAllowTags' => [
        'type' => 'textarea',
        'value' => 'p,a,img,i,b,u,em,strong,nobr,li,ol,ul,sup,abbr,pre,acronym,h1,h2,h3,h4,h5,h6,cut,br,code,table,tr,th,td,video,hr',
    ],

    'cfgSetAutoBrMode' => [
        'type' => 'combo-boolean',
        'value' => true,
    ],
    'cfgSetAutoLinkMode' => [
        'type' => 'combo-boolean',
        'value' => true,
    ],

    'cfgSetAutoReplace' => [
        'type' => 'textarea',
        'value' => '[["+/-","(c)","(с)","(r)","(C)","(С)","(R)"],["±","©","©","®","©","©","®"]]',
    ],
    'cfgSetAutoPregReplace' => [
        'type' => 'textarea',
        'value' => '[["\/<video>(http|https):\\\\\/\\\\\/(?:www\\\\.|)youtube\\\\.com\\\\\/watch\\\\?v=([a-zA-Z0-9_\\\\-]+)(&.+)?<\\\\\/video>\/Ui","\/<video>(http|https):\\\\\/\\\\\/(?:www\\\\.|)youtu\\\\.be\\\\\/([a-zA-Z0-9_\\\\-]+)(&.+)?<\\\\\/video>\/Ui"],["<iframe width=\"700\" height=\"394\" src=\"$1:\/\/www.youtube.com\/embed\/$2\" frameborder=\"0\" allowfullscreen><\/iframe>","<iframe width=\"700\" height=\"394\" src=\"$1:\/\/www.youtube.com\/embed\/$2\" frameborder=\"0\" allowfullscreen><\/iframe>"]]',
    ],

    'cfgSetTagChilds' => [
        'type' => 'textarea',
        'value' => '[["ul",["li"],false,true],["ol",["li"],false,true],["table",["tr"],false,true],["tr",["td","th"],false,true]]',
    ],
    'cfgSetTagCutWithContent' => [
        'type' => 'textarea',
        'value' => 'script,object,iframe,style',
    ],
    'cfgSetTagNoAutoBr' => [
        'type' => 'textarea',
        'value' => 'ul,ol,object,table,tr',
    ],
    'cfgSetTagParamDefault' => [
        'type' => 'textarea',
        'value' => '[["a","rel",null,true]]',
    ],
    'cfgSetTagParamsRequired' => [
        'type' => 'textarea',
        'value' => '{"img":["src"],"a":["href"]}',
    ],

    'cfgSetTagNoTypography' => [
        'type' => 'textarea',
        'value' => 'pre,code,video',
    ],
    'cfgSetTagPreformatted' => [
        'type' => 'textarea',
        'value' => 'pre,code',
    ],
    'cfgSetTagBlockType' => [
        'type' => 'textarea',
        'value' => '["h4","h5","h6","ol","ul","blockquote","pre","code","video"]',
    ],
    'cfgSetTagShort' => [
        'type' => 'textarea',
        'value' => 'br,img,hr,cut',
    ],
    'cfgSetTagIsEmpty' => [
        'type' => 'textarea',
        'value' => '',
    ],

    'cfgSetXHTMLMode' => [
        'type' => 'combo-boolean',
        'value' => false,
    ],
];

foreach ($tmp as $k => $v) {
    $properties[] = array_merge([
        'name' => $k,
        'desc' => PKG_NAME_LOWER . '_prop_' . $k,
        'lexicon' => PKG_NAME_LOWER . ':properties',
    ], $v);
}

return $properties;