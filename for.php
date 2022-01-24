<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<?php
    echo "<form action=\"for.php\">";
    echo "<input type=\"number\"  name=\"multiplier\">";
    echo "<input type=\"submit\">";
    echo "</form>";
    $multiplier=$_GET['multiplier'];
    echo "請輸入2~9的其中一個數字"."<br/>";
    if ($multiplier>=2 and $multiplier<=9){
        echo "<ul>";
        for($i=1;$i<1000;$i++){
        $quotient=$multiplier*$i;
        echo "<li>$multiplier*$i=".$quotient."</li>";
        if ($i % 10 ==0){
            echo "<br/>";
        }  
    }
        }else{
        echo "您輸入的數字不在範圍內";
        }
?>
</ul>
</body>
</html>