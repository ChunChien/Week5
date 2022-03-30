<?php

session_start();
if(isset($_SESSION['login'])){
    if($_SESSION['login']=="1"){
    }else{
        echo "非法進入系統<br/>";
        echo "<a href='login.php'>回登入頁</a>";   
        exit();
    
    }
}else{
    echo "非法進入系統";
    echo "<a href='login.php'>回登入頁</a>";
    exit();
}

?>

<html>
<head>

<title>for管理員</title>

</head>

這是管理員的頁面


<div style="padding:10px">
    <center>
    <a href="logout.php">
    <input type="button" value="登出系統" style="width:120px;height:40px;font-size:20px">
    </a>
    </center>
</div>

</html>