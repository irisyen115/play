<html>
<head>
    <meta charset="utf-8">
    <style>
    .title{width:100px}
    .content{text-align:left;width:100px}
    .weekend{color:red;width:100px}
    </style>
</head>
<body>
<form action="calendar.php">
<table>
    <tr>
        <td>西元：<input type="number" name="year"></td>
        <td>月份：<input type="number" name="month"></td>
    </tr>
</table>

<input type="submit">
</form>
<?php
$year=$_GET['year'];

$days=array(-1,31,28,31,30,31,30,31,31,30,31,30,31);
$month=$_GET['month'];
$content= 4;
function is_leap_year($y) {
    if($y % 400 == 0 or ($y % 4 == 0 and $y % 100 != 0)) {
        return true;
    } else {
        return false;
    }
}

// 走到 year 的 Jan 1st
for ($i=1971;$i<$year+1;$i++){
    
    if (is_leap_year($i-1)){
        $content=$content+366;    
    }else{
        $content=$content+365;
    }
}

// 走到 month 的 1st, 例如目標是 7.10, 則這個迴圈負責走到 Jul. 1st
for ($i=1;$i<$month;$i++){
    $content=$content+$days[$i];
    if(is_leap_year($year) and 2==$i){
        $content=$content+1;
    }   
}

//印出日曆

//算出那一天是禮拜幾
$content = $content % 7;

//算出有幾行
$rows = ceil(($content+$days[$month])/7);
//開始畫表格
echo "<table>";
//    寫出標題
echo "<tr>
    <td class=\"weekend\">日</td>
    <td class=\"title\">一</td>
    <td class=\"title\">二</td>
    <td class=\"title\">三</td>
    <td class=\"title\">四</td>
    <td class=\"title\">五</td>
    <td class=\"weekend\">六</td>
    </tr>";
//    畫第一行
echo "<tr>";
    for($i=0;$i<$content;$i++){
    echo "<td></td>";
    }
    for($i=$content, $j = 1 ; $i<7 ; $i++. $j++){
        if ($i==0 or $i==6){
            echo "<td class=\"weekend\">$j</td>";
        } else {
        echo "<td class=\"content\">$j</td>";
        }
    }
    "</tr>";
//    畫二到倒數第二行
for($row=1;$row<$rows;$row++){
    echo "<tr>";
    
    $week_start=7*$row-$content+1;
    $week_end=$week_start+6;
    for($date=$week_start;$date<=$week_end;$date++){
        if ($date>$days[$month]) {
            echo "<td></td>";
        } else {
            if ($date==$week_start or $date==$week_end){
                echo "<td class=\"weekend\">$date</td>";
            } else{
                echo "<td class=\"content\">$date</td>";
            }
    }
}

    echo "</tr>";    
}
echo "</table>";


?>
</body>
</html>