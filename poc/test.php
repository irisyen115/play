<?php

$fp1 = fopen("xd.txt", 'r');
fclose($fp1);

$fp1 = fopen("qq.txt", 'r');
$txt = fread($fp1, 13);
echo $txt."\n";
fclose($fp1);

?>
