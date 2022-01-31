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
        if ($cards[$i] > 10) {
            $s = $s + 0.5;
        } else {
            $s = $s +$cards[$i];
        }
    }

    return $s;
}

$_SESSION['banker_points'] = array();
//將card存入session之後洗牌
shuffle($_SESSION['card']);
//接著抽出第一章牌



//如果加起來沒超過十點半就繼續發牌，剛好等於十點半就贏了這局，超過十點半就輸了這局

$banker_points = 0;
$in_hands = array();//手裡的所有牌
$player_points = calculate_score($_SESSION['points']);

while ($player_points >= $banker_points and $banker_points < 10.5 and count($in_hands) != 5) {
    
    // print_r($_SESSION);
    $bl = $_SESSION['card'][$_SESSION['pos']] % 13 + 1;
    array_push($in_hands,$bl);
    echo $bl."<br/>";
    $banker_points = calculate_score($in_hands);
    $_SESSION['pos'] = $_SESSION['pos'] + 1;
} 

if ($banker_points > 10.5) {
    echo "很遺憾,你輸了";
    echo "<a href=\"card.php\">重來一局</a>";
} elseif ($banker_points == 10.5 or count($in_hands) == 5 or $banker_points > $player_points) {
    echo "恭喜你贏了";
    echo "<a href=\"card.php\">重來一局</a>";
} 

echo "Total points: ". $banker_points."<br/>";
echo implode(",", $in_hands);

?>
</body>
</html>