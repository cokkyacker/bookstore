<?php error_reporting(0); ?>
	<?php
  $title=$_POST[title];
  $content=$_POST[content];
  include("conn/conn.php");
  header("Content-type:text/html;charset=utf-8");  
  mysql_query("update tb_gonggao set title='$title',content='$content' where id='".$_POST[id]."'",$conn);
  echo "<script>alert('公告修改成功!');history.back();</script>";
?>