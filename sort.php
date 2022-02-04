<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

for ($i = 0; $i < 20; $i++) {  //產生20個
    $a[$i] = rand(1, 25);  //寫入陣列
}

echo implode(", " ,$a)."<br/>";
for ($pos = 0;$pos <20 ;$pos++){
    $m = $a[$pos];
    $mp = $pos;
    for($i = $pos;$i <20;$i++){
        //找出最小值的位置
        if ($a[$i]<$m){
            $m = $a[$i];
            $mp = $i;
        }
    }
    //找出最小值的位置，再跟$pos交換
    $tmp = $a[$pos];
    $a[$pos] = $m;
    $a[$mp] = $tmp;
    
}

echo implode(", " ,$a);
?>
</body>
</html>