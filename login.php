<?php

session_start();

?>

<?php
if (isset($_COOKIE["UID"])){
    $cookieID=$_COOKIE["UID"];
    echo "歡迎".$cookieID."再度光臨";
}else{
    echo "早安午安晚安";
}
?>







<html>

<head>
    <title>會員登入</title>
</head>


<body>
    <form action="" method="post" enctype="multipart/form-data">
    <div style="background-color:#F5FFE8;padding:7px;margin-left: 100;margin-right: 100">
        <h1><center>會員登入</center></h1>
    </div>
    <div style="background-color:#FFFFFF;padding:7px;margin-left: 300;margin-right: 300">
        <table align="center" cellspacing="10px">
            <tr>
                <td><span style="font-size:20px;"><b>帳號:</b></span></td>
                <td><span style="padding:5px"><input type="text" name="account" placeholder="帳號" style="font-size:15px;padding:3px"></span></td>
            </tr>
            <tr>
                <td><span style="font-size:20px;"><b>密碼:</b></span></td>
                <td><span style="padding:5px"><input type="password" name="password" placeholder="密碼" style="font-size:15px;padding:3px"></span></td>
            </tr>
            
            
            
        </table>
        <center>
        <button type="submit" name="登入" class="btn">登入</button>
        <p>
            還未加入會員嗎?<a href="signup.php">註冊會員</a>
        </p>
        </center>
       

    </div>
    
</body>

<?php

$aID_1="admin";
$aID_2="user";
$apsw="ashin1206";


//echo date_default_timezone_set('Asia/Taipei');
//echo date("Y-m-d H:i:s", time());
//header("Refresh:1");

if (isset($_POST["account"])){
    if ($_POST["account"]!=null){
        $uId = $_POST["account"];
        $psw = $_POST["password"];
        if($aID_1 == $uId && $apsw == $psw){
            $_SESSION['login']="1";
            echo "登入成功，2秒後將進行跳轉";
            setcookie("UID",$uId,time()+17280);
            header("Refresh:2;url=index_1.php");
            }
            elseif($aID_2 == $uId && $apsw == $psw){
                $_SESSION['login']="2";
                echo "登入成功，2秒後將進行跳轉";
                setcookie("UID",$uId,time()+17280);
                header("Refresh:2;url=index_2.php");
            }
            
            else{echo "帳號或密碼輸入錯誤";}

    }else{
        echo "您尚未輸入帳號或密碼";
    }

}else{
    //header("Refresh:1");
    //echo "歡迎登入，請輸入帳號密碼";
}




?>

</html>