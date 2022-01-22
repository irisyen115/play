<html>
<body>

<?php
    $cm=$_GET['cm'];
    $m=($cm/100);
    echo "M is",$m, "<br/>";
    $kg=$_GET['kg'];
    $BMI=round($kg/($m*$m),2);
    echo "BMI is",$BMI, "<br/>";
if ($BMI > 24){
    echo "超標";
}
else{
    echo "標準";
}
?>

</body>
</html>