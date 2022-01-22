<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<?php

$file_path='data/'.$_GET['telephone'];

if(file_exists($file_path)==false){
    echo "查無資料";
}
else{
$myfile = fopen($file_path , "r");
$str = fread($myfile,filesize($file_path));
echo $str;
}
?>
</body>
</html>