<?php
	session_start();
?>
<html>
	<head>
	<meta charset="utf-8">
	</head>
<?php
    session_destroy();
    echo "你已登出，5秒後跳回登入頁面";
    echo "<meta http-equiv=\"Refresh\" content=\"5;url=http://test1.ui-code.com/~rbx/login_page/index.html\">";
?>
</html>