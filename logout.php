<?php

session_start();
session_destroy();
setcookie("UID",$uid,time()-36);
header("Location:login.php")




?>