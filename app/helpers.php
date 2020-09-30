<?php

function isMobile()
{
	if(is_mobile() && !is_tablet() && !is_ipad()) {
		return true;
	}

	return false;
}

function is_desktop(){
  $useragent = $_SERVER['HTTP_USER_AGENT'];
  return stripos($useragent,'mobile')===false && stripos($useragent,'tablet')===false && stripos($useragent,'ipad')===false ;
}
 
function is_tablet(){
  $useragent = $_SERVER['HTTP_USER_AGENT'];
  return stripos($useragent,'tablet')!==false || stripos($useragent,'tab')!==false;
}

function is_ipad(){
  $useragent = $_SERVER['HTTP_USER_AGENT'];
  return stripos($useragent,'ipad')!==false;
}

function is_mobile(){
  $useragent = $_SERVER['HTTP_USER_AGENT'];
  return stripos($useragent,'mobile')!==false || stripos($useragent,'nokia')!==false || stripos($useragent,'phone')!==false;
}

function onlyNumber($c)
{
    return preg_replace('/\D/', '', $c);
}

function summarizeText($string, $length = 120)
{
    if (strlen($string) > $length) {
        return substr($string, 0, $length) . '...';
    }
    return $string;
}

function formatMoney($i)
{
	$fig = (int) str_pad('1', 3, '0');    
    return number_format((floor($i * $fig) / $fig), 2, ',', '.');
}
