<?php
    session_start();
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
    if("check_ok"==$_SESSION['result']){
        echo "歡迎登入";
        echo "<form action=\"../login_page/logout.php\" >";
        echo "<input type=\"submit\" value=\"按此登出\">";
        echo "</form>";
    }
    else{
        echo "尚未登入，五秒後跳轉登入頁面";
        echo "<meta http-equiv=\"Refresh\" content=\"5;url=http://test1.ui-code.com/~rbx/login_page/index.html\">";
    }
?>


<form action="save.php" method="post">
<input type="text" name="title" placeholder="title"></br></br>
<textarea cols="50" rows="5" placeholder=" 內容" name="content"></textarea></br>
<?php
		if("check_ok"==$_SESSION["result"]){
			echo "<input type=\"submit\">";
		}
		else{
			echo "必須登入成功才可使用";
		}
?>

</form>
</body>
</html>