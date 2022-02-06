<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
for ($i = 0; $i < 100; $i++) {  //產生100個
    $a[$i] = rand(1, 10); //範圍一到十的亂數
}
echo implode(", ",$a)."<br/>";
$answer = array_count_values($a);
echo "1有".$answer['1']."個";
?>
</body>
</html>