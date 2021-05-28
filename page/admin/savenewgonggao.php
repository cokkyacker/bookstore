<?php error_reporting(0); ?>
	<?php
 include("conn/conn.php");
 header("Content-type:text/html;charset=utf-8");  
 $title=$_POST[title];
 $content=$_POST[content];
 $showtime=date("Y-m-d H:i:s");
 mysql_query("insert into tb_gonggao (title,content,time) values ('$title','$content','$showtime')",$conn);
 echo "<script>alert('公告添加成功!');history.back();</script>";
?>