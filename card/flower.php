<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
$_SESSION['card'] = $card = array();
//給撲克牌設花色
for ($i = 0; $i < 52; $i++) {
    $_SESSION['card'][$i] = $i;

    $points = $i % 13 +1;
    if (floor($i / 13) == 0){
        echo "spade".$points;
    }

    elseif (floor($i / 13) == 1){
        echo "heart".$points;
    }
    
    elseif (floor($i / 13) == 2){
        echo "diamond".$points;
    }
    
    elseif (floor($i / 13) == 3){
        echo "club".$points;
    } else {
        echo "<br/>";
        echo $i, "=>", $i / 13, "<br/>";
    }
    
}

$_SESSION['pos'] = 0;
$_SESSION['points'] = array();

echo "<form action = \"play_card.php\">";
echo "<input type = \"submit\" value = \"發牌\">" ;
echo "</form>";
?>
?>
</body>
</html>