<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="leap_year.php">
<input type="number" name="year" placeholder="請輸入年份">
<input type="submit">
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