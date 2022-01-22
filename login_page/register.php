
<html>
<head>
    <meta charset="utf-8">
</head>
<body>


<?php

$path = 'login_save/'.$_POST['account'];
$path_2 = 'login_save_2/'.$_POST['account'];

//  傳入 my_path
//  把亂數檔案存進 my_path
function save_file_to_path($my_path, $content) {
    $myfile=fopen($my_path,"w");
    fwrite($myfile,$content);
    fclose($myfile);
    echo "我成功把檔案存到".$my_path."路徑</br>";
}

if (file_exists($path)) {
    echo "已註冊，不能報名";
} else {
    echo "報名成功";
    $password=$_POST['password'];
    $hash=password_hash($password,PASSWORD_DEFAULT);
    save_file_to_path($path,$hash);
    save_file_to_path($path_2,$hash);
    

}     
?>

</body>
</html>