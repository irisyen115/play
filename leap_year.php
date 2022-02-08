<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="leap_year.php">
<input type="number" name="year" placeholder="請輸入年份">
<input type="submit">
<!--已知1900年1月1日為星期一-->

<?php
$year=$_GET['year'];
if($year %400 == 0 or ($year %4 == 0 and $year %100 !=0)){
    echo "您輸入的年份為閏年";
}else{
    echo "您輸入的年份為平年";
} 
?>
</form>
</body>
</html>