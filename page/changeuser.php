<?php error_reporting(0); ?>
<?php
include("../page/conn/conn.php");
session_start();
$name=$_SESSION[username];
$tel=$_POST[tel];
$dizhi=$_POST[dizhi];
$youbian=$_POST[youbian];
mysql_query("update tb_user set tel='$tel',dizhi='$dizhi',youbian='$youbian' where name='".$name."'",$conn);
header("location:usercenter.php");

?>
