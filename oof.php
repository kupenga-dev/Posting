<?php 
require_once 'function.php';

$url = 'https://oof.by/';
$cookies = "cookie-off.by.txt";

$arrPost = array(
    'AUTH_FORM' => 'Y',
    'TYPE' => 'AUTH',
    'backurl' => '/personal/',
    'USER_LOGIN' => 'vviper@list.ru',
    'USER_PASSWORD' => '123456',
);
// $ch = curl_init();
// curl_close();

$page = get_page('post', 'https://oof.by/local/templates/idealboardfree/ajax/auth.php', $arrPost, $cookies, $url);
$page = get_page('get', 'http://oof.by/personal/', array(), $cookies, $url);
$arrAd = array(
    'numDell1' => '', 
    'name' => 'Текстовый заголовок',
    'text' => 'Текст объявления',
    'price' => '3',
    'category' => '289',
    'user_name' => 'Даниил',
    'email' => 'vviper@list.ru',
    'phone' => '+375 (29) 111-11-11',
    'city' => '121',
);
$page = get_page('post', 'https://oof.by/new_post/', $arrAd, $cookies, $url);
//$content = $page['content'];
//print_r($content);




?>