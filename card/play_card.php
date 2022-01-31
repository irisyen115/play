<?php
    session_start();
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
//將card存入session之後洗牌
shuffle($_SESSION['card']);
//接著抽出第一章牌
$points = $_SESSION['card'][$_SESSION['pos']] % 13 + 1;


//接著在把這些牌的點數存進session['points']
$_SESSION['pos'] = $_SESSION['pos']+1;
echo "你抽了".$_SESSION['pos']."張";
array_push($_SESSION['points'],$points);
echo "你拿到了這些".(implode(",",$_SESSION['points']))."<br/>";


//如果加起來沒超過十點半就繼續發牌，剛好等於十點半就贏了這局，超過十點半就輸了這局

$s = 0;
$in_hands = $_SESSION['points'];//手裡的所有牌
$length = count($in_hands);//陣列的長度，也就是有幾張牌

for ($i = 0; $i < $length; $i++) {
    //迴圈的範圍為0到手中有幾張牌
    if ($in_hands[$i] > 10) {
    //若手上的牌有大於10的，那加的時候就都要換成0.5
    $s = $s + 0.5;
    } else{
    $s = $s + $in_hands[$i];
    }
}

if ($s > 10.5) {
    echo "很遺憾,你輸了";
    echo "<a href=\"card.php\">重來一局</a>";
} elseif ($s == 10.5 or ($_SESSION['pos'] == 5 and $s <= 10.5)) {
    echo "恭喜你贏了";
    echo "<a href=\"card.php\">重來一局</a>";
} else {
    echo "請繼續發牌";
    $_SESSION['result'] = 'check_ok';
}

echo "Total points: ". $s;
echo "<form action = \"play_card.php\">";
echo "<input type = \"submit\" value = \"發牌\">" ;

if ('check_ok' == $_SESSION['result']) {
    echo "<input type = \"submit\" formaction = \"banker.php\" value = \"停止發牌，換莊家出牌\">";
} else{
    echo "不可在發牌";
}
echo "</form>";
?>
</body>
</html>