<?php error_reporting(0); ?>
<?php
session_start();
header("Content-type:text/html;charset=utf-8");  
include("../page/conn/conn.php");
$username=$_SESSION[username];
$sql=mysql_query("select * from tb_user where name='".$username."'",$conn);
$info=mysql_fetch_array($sql);
$id=$info[id];
mysql_query("delete from tb_gowuche where userid=".$id." ",$conn);
header("location:gouwuche.php");
?>