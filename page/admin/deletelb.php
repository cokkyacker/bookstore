<?php error_reporting(0); ?>
<?php
include("conn/conn.php");
while(list($name,$value)=each($_POST)){
 mysql_query("delete from tb_type where id='".$value."'",$conn);
 mysql_query("delete from tb_book where id='".$value."'",$conn);
 }
 header("location:showleibie.php");
?>