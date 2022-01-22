<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
$title=$_POST['title'];
echo $title,"</br>";
$content=$_POST['content'];
echo $content;

$path = 'story/'.$title;
    $myfile = fopen($path, "w") or die("Unable to open file!");
    $txt = $content."\n";
    fwrite($myfile, $txt);
    fclose($myfile);
?>
</body>
</html>