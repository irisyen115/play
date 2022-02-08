<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="weekday.php">
<table>
    <tr>
        <td>西元：<input type="number" name="year"></td>
        <td>月份：<input type="number" name="month"></td>
        <td>日期：<input type="number" name="date"></td>
    </tr>
</table>
<?php
$year=$_GET['year'];

$days=array(-1,31,28,31,30,31,30,31,31,30,31,30,31);
$month=$_GET['month'];
$date=$_GET['date'];
$weekday= 4;
function is_leap_year($y) {
    if($y %400 == 0 or ($y %4 == 0 and $y %100 !=0)){
        return true;
    }else{
        return false;
    }
}

// 走到 year 的 Jan 1st
for ($i=1971;$i<$year+1;$i++){
    
    if (is_leap_year($i-1)){
        $weekday=$weekday+366;    
    }else{
        $weekday=$weekday+365;
    }
}

// 走到 month 的 1st, 例如目標是 7.10, 則這個迴圈負責走到 Jul. 1st
for ($i=1;$i<$month;$i++){
    $weekday=$weekday+$days[$i];
    if(is_leap_year($year) and 2==$i){
        $weekday=$weekday+1;
    }   
}


// 最後再加上剩下的天數
$weekday=$weekday+$date-1;
echo $weekday % 7 ;
//印出日曆



?>
<input type="submit">
</form>
</body>
</html>