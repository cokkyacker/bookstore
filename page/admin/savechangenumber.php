<?php error_reporting(0); ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
include("conn/conn.php");

$shuliang=$_POST[shuliang];

mysql_query("update tb_book set shuliang='$shuliang' where id=$_GET[id]",$conn);
echo "<script>alert('库存修改成功!');window.location='number.php';</script>";
?>