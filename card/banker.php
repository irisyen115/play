<?php
    session_start();
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
function calculate_score($cards) {
    $s = 0;
    $length = count($cards);
    for($i = 0 ; $i < $length; $i++) {
        $fp = ($cards[$i] % 13) + 1; 
        if ($fp > 10) {
            $s = $s + 0.5;
        } else {
            $s = $s +$fp;
        }
    }

    return $s;
}


//將card存入session之後洗牌
shuffle($_SESSION['card']);
$banker_points = 0;
$in_hands = array();//手裡的所有牌
$player_points = calculate_score($_SESSION['points']);

while ($player_points >= $banker_points and $banker_points < 10.5 and count($in_hands) != 5) {
    
    // print_r($_SESSION);
    $bl = $_SESSION['card'][$_SESSION['pos']];
    array_push($in_hands,$bl);

    $banker_points = calculate_score($in_hands);

    $_SESSION['pos'] = $_SESSION['pos'] + 1;
}

for ($i = 0;$i < count($in_hands);$i++){
        
    $p = ($in_hands[$i] % 13) +1;
    if (floor($in_hands[$i] / 13) == 0){
        echo "黑桃".$p."<br/>";
    }

    elseif (floor($in_hands[$i] /13) == 1){
        echo "紅心".$p."<br/>";
    }
    
    elseif (floor($in_hands[$i]/13) == 2){
        echo "方塊".$p."<br/>";
    }
    
    elseif (floor($in_hands[$i]/13) == 3){
        echo "梅花".$p."<br/>";
    } 
}

if ($banker_points > 10.5) {
    echo "很遺憾,你輸了";
    echo "<a href=\"card.php\">重來一局</a>";
} elseif ($banker_points == 10.5 or count($in_hands) == 5 or $banker_points > $player_points) {
    echo "恭喜你贏了";
    echo "<a href=\"card.php\">重來一局</a>";
} 

echo "Total points: ". $banker_points."<br/>";
// echo implode(",", $in_hands);

?>
</body>
</html>