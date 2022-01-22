<?php
    session_start();
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<?php
$password=$_POST['password'];
$path = 'login_save/'.$_POST['account'];

if (file_exists($path) ){
    $myfile = fopen($path , "r");
    $str = fread($myfile,filesize($path));
    fclose($myfile);
    if(password_verify($password,$str) == true){
        echo "密碼正確，歡迎";
        $_SESSION['result']='check_ok';
    }

    else{
        echo "密碼錯誤";
    }            
} else {

    echo "無法登入";
}
     

?>
</form>
</body>
</html>