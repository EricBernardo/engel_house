<?php

function isMobile()
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

function onlyNumber($c)
{
    return preg_replace('/\D/', '', $c);
}

function summarizeText($string, $length = 120)
{
    if(strlen($string) > $length) {
    	return substr($string, 0, $length) . '...';
    }
    return $string;
}
