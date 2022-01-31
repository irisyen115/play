<?php
    session_start();
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
$_SESSION['card'] = $card = array();
//撲克牌十點半遊戲規則，撲克牌點數一到十分別為一到十點，十一到十三則都是半點
//玩家最多可以拿到五張牌，假設過程中加起來的點數剛好等於十點半便是嬴，超過就是輸，可若五張加起來都沒超過十點半那也是嬴
for ($i = 0; $i < 52; $i++) {
    $_SESSION['card'][$i] = $i;
}

$_SESSION['pos'] = 0;
$_SESSION['points'] = array();

echo "<form action = \"play_card.php\">";
echo "<input type = \"submit\" value = \"發牌\">" ;
echo "</form>";
?>
</body>
</html>