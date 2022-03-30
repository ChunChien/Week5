<?php

session_start();
if(isset($_SESSION['login'])){
    if($_SESSION['login']=="2"){
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
    <meta name="keyword" content="墾丁三日遊">
    <title>墾丁三日遊</title>
    <!--(HTML註解這樣打)-->
    <link rel="icon" href="/img/ocean.png" type="image/x-icon" />


</head>

<?php


?>



<font color=#00ced1><center><h1>墾丁三日遊</h1></center>
<div class="container">
    <h2>行程內容</h2>
</div>
</font>
<table>
<tr>
    <td style="padding:7px;">
        <div style="background-color:#F5FFE8;height: 30%;float:left">
            <!--<b>行程內容</b>-->
            <div>
                <ul>
                <li><font color="#333399" size="4"><b><p>墾丁統一渡假村</b></font><br/>
                位於墾丁國家公園內，背倚鵝鑾山，前臨巴士海峽，鄰近鵝鑾鼻燈塔、龍坑生態保護區等景點。</p>

                </li>

                <li><font color="#333399" size="4"><b><p>國立海洋生物博物館</b></font><br/>
                屏東海生館是全台最大的國立海洋生物博物館，海生館介紹非常稀奇珍貴的魚類與精彩水底世界，</br>
                漫步墾丁海生館水藍色海底隧道，除了景色夢幻，更能看到許多可愛的小白鯨、企鵝、海豹喔！</p>
                </li>

                <li><font color="#333399" size="4"><b><p>萬里桐浮潛</b></font><br/>
                萬里桐可是潛水、浮潛清澈度最佳的海域，<br/>
                因為沒有水上活動設施的干擾，所以遊客可以近距離看見可愛的魚群，</br>
                到了傍晚這裡也可以看到西邊落下的夕陽，美麗又浪漫的拍照景點</p>
                </li>
            </div>
        </div>
    </td>
    <td style="padding:20px;">
        <a href="https://www.ktnp.gov.tw/News_Content2.aspx?n=28AB1D16ECF7E63C&sms=C88B5251F308CE96&s=335E99E46DC7832F" target="new">
        <img src="/img/ocean.jpg" height="250"></img>
        </a>

        <a href="https://www.ktnp.gov.tw/News_Content2.aspx?n=28AB1D16ECF7E63C&sms=C88B5251F308CE96&s=FBA816F7D6A92A92" target="new">
        <img src="/img/123.jpg" height="250"></img>
        </a>
    </td>
</tr>
</table>


<div style="background-color:#F5FFE8;padding:7px;margin-left: 10;margin-right: 10">
<center><font color=#00ced1><h1>報名表</h1></font></center>
<form action="rinfo.php" method="post" enctype="multipart/form-data">
<table align= "center" cellspacing="10px">
    <tr>
        <td><span style="font-size:20px;"><b>姓名:</b></span></td>
        <td><span style="padding:5px"><input type="text" name="uname" placeholder="您的大名" style="font-size:15px;padding:3px"></span></td>
    </tr>
    <tr>
        <td><span style="font-size:20px;"><b>電話:</b></span></td>
        <td><span style="padding:5px"><input type="text" name="tel" placeholder="聯絡電話"style="font-size:15px;padding:3px"></span></td>
    </tr>
    <tr>
        <td><span style="font-size:20px;"><b>信箱:</b></span></td>
        <td><span style="padding:5px"><input type="text" name="email" placeholder="聯絡信箱"style="font-size:15px;padding:3px"></span></td>
    </tr>
    <tr>
        <td><span style="font-size:20px;"><b>生日:</b></span></td>
        <td><span style="padding:5px"><input type="date" name="ubir" style="font-size:15px;padding:3px"></span></td>
    </tr>
    <tr>
        <td><span style="font-size:20px;"><b>性別:</b></span></td>
        <td><span style="padding:5px"><input type="radio" name="gender" value="1">男性<input type="radio" name="gender" value="2">女性<input type="radio" name="gender" value="3">其他</span></td>
    </tr>
    <tr>
        <td><span style="font-size:20px;"><b>飲食:</b></span></td>
        <td><input type="checkbox" name="food[]" value="素食">素食</tr>
        <tr><td></td>
            <td><input type="checkbox" name="food[]" value="葷食">葷食</td>
        </tr>
        <tr><td></td>
            <td><input type="checkbox" name="food[]" value="蛋過敏">蛋過敏</td>
        </tr>
        <tr><td></td>
            <td><input type="checkbox" name="food[]" value="蝦過敏">蝦過敏</td>
        </tr>
    </tr>
    <tr>
        <td><span style="font-size:20px;"><b>衣服尺寸:</b></span></td>
        <td><select name="size">
        <option value="1">S</option>
        <option value="2">M</option>
        <option value="3">L</option>
        <option value="4">XL</option>
        </td>
    </tr>
    <tr>
        <td><span style="font-size:20px;"><b>票數:</b></span></td>
        <td><span style="padding:5px"><input type="number" name="number"></span></td>
    </tr>
    <tr>
        <td><span style="font-size:20px;"><b>您的意見:</b></span></td></td>
        <td><textarea name="comment" cols="50" rows="5"></textarea></td>
    </tr>
    <tr>
        <td><span style="font-size:20px;"><b>上傳檔案:</b></span></td></td>
        <td><input type="file" name="uphoto"></textarea></td>
    </tr>

        
</table>

<center>
<input type="submit">
<input type="reset">
</center>

</div>
</form>
<div style="padding:10px">
    <center>
    <a href="logout.php">
    <input type="button" value="登出系統" style="width:120px;height:40px;font-size:20px">
    </a>
    </center>
</div>
</html>