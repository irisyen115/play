<html>
<head>
<body>
<?php
$s=$m=20000000;
$M=1;
for ($i = 0; $i < 20; $i++) {  //產生20個
$a[$i] = rand(1, 25);  //寫入陣列
    if ($a[$i] < $m) { 
        $m = $a[$i];
    } elseif ($a[$i]>$M) {
        $M = $a[$i];
    }
}



for($i = 0; $i < 20; $i++) {
    if ($a[$i] < $s and $a[$i]!=$m) {
        $s = $a[$i];
    }
    // elseif ($a[$i] < $m and $a[$i] < $s) {
    //     list($m,$s) = array($a[$i],$m); 
        
    // }
}

// foreach($a as $value){  //把陣列內的亂數讀出
// }

echo implode(", ", $a)."<br/>";

sort($a);
echo implode(", ", $a);

echo ".." . "<br/>";
echo "最小值是".$m."<br/>";
echo $s."<br/>";
echo $M;

?>
</body>
</head>
</html>