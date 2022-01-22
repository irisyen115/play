<html>
    <body>

<?php   
   $file=@file("readfile-line-2.txt");
   for($i=0;$i<count($file);$i++)
   {
   echo $file[$i]."<br>";
   }
?>

<?php

$file=@file("readfile-line-2.txt");
$w=fopen("readfile-line-2.txt","a");
fputs($w,$name."顏辰霖"); //將新資料寫進檔案
fclose($w);
echo ""
?>

</body>
</html>