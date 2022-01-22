<html>
<head>
<meta charset="utf-8">
</head>
<body>

<?php
echo $_GET['name'],"</br>";
echo $_GET['gender'],"</br>";
echo $_GET['telephone'],"</br>";
echo $_GET['quantity'],"</br>";
?>

<?php
$path = 'data/'.$_GET['telephone'];

if (file_exists($path)) {
    echo "不能報名";
} else {
    echo "報名成功";
    $myfile = fopen($path, "w") or die("Unable to open file!");
    $txt = $_GET['telephone']."\n";
    fwrite($myfile, $txt);
    $txt = $_GET['name']."\n";
    fwrite($myfile, $txt);
    $txt = $_GET['gender']."\n";
    fwrite($myfile, $txt);
    $txt = $_GET['quantity']."\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    }
?>




</body>
</html>