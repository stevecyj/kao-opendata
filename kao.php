<?php

header('Access-Control-Allow-Origin: *');
header("Content-Type: text/html; charset=utf-8");

$text = file_get_contents('https://cabu4.kcg.gov.tw/KcgRegion/OpenData/%E9%87%8C%E9%95%B7%E9%80%9A%E8%A8%8A%E9%8C%84.JSON');
$tt = mb_convert_encoding(
    $text,
    'UTF-8',
    mb_detect_encoding($text, 'UTF-8, big5', true)
);
echo $tt;
