<?php error_reporting(0); ?>
<?php
include("conn/conn.php");
$id=$_GET[id];
mysql_query("update tb_leaveword set pass=1 where id= $id ",$conn);
header("location:lookleaveword.php");
?>
