<?php

function getSnippetContent($filename)
{
    $o = file_get_contents($filename);
    $o = trim(str_replace(['<?php', '?>'], '', $o));

    return $o;
}