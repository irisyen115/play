<?php
    session_start();
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
$_SESSION['dice_box'] = $dice_box = array();
//首先先做出三顆骰子，並且讓這三顆骰子搖出任意點數
for ($i = 0;$i < 3; $i++){
    $_SESSION['dice_box'][$i] = rand (1,6);
     
}
echo implode(", ",$_SESSION['dice_box']);
$guess = $_GET['guess'];



//如果玩家猜出的點數有相符的就能嬴，沒有的則輸

echo "<form action=\"dice.php\">";
echo "<input type=\"number\" name=\"guess\">";
echo "<input type=\"submit\">";
echo "</form>";

?>

</body>
</html>