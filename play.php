<?php
    session_start();
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
function my_echo($content){
    echo $content."</br>";
}


    if (isset($_SESSION['answer'])) {
        // 玩到一半的階段
        $guess = $_GET['guess'];
        $_SESSION['times']=$_SESSION['times']+1;
        

        my_echo($guess);

        if ($guess<=$_SESSION['start'] or $guess>=$_SESSION['end']){
            my_echo("出界了喔");
        }

        if ($guess>$_SESSION['answer']){
            my_echo("低一點");
            $_SESSION['end']=$guess;
        } elseif($guess<$_SESSION['answer']){
            my_echo("高一點");
            $_SESSION['start']=$guess;
        } else {
            my_echo("bingo!!");
            session_destroy();
            echo "<a href=\"play.php\">再來一局</a>";
            exit();
        }
        
    } else {
        // 還沒開始的階段
        $_SESSION['answer']=rand(1,100);
        $_SESSION['start']=1;
        $_SESSION['end']=100;
        $_SESSION['times']=0;
        
    }
    my_echo ($_SESSION['start']."~".$_SESSION['end']);
    echo "已猜了".$_SESSION['times']."次";
    echo "<form action=\"play.php\">";
    echo "<input type=\"number\" name=\"guess\">";
    echo "<input type=\"submit\">";
    echo "</form>";
    
?>

</body>
</html>