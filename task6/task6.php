<?php
$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
$url=parse_url($url);

echo 'Host : '.$url['host']."\n";

?>