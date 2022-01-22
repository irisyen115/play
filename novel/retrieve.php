<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
$title=$_GET['title'];

$file_path = 'story/'.$title;

if(file_exists($file_path)==false){
    echo "查無檔案";
}
else{
$myfile = fopen($file_path , "r");
$str = fread($myfile,filesize($file_path));
echo $str;
}
?>

<?php

?>
</body>
</html>