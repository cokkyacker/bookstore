<?php error_reporting(0); ?>
	<?php
 include("conn/conn.php");
 header("Content-type:text/html;charset=utf-8");  
 $name=$_POST[name];
 $keywords=$_POST[keywords];
 $picture=$_POST[picture];
 $link=$_POST[link];
 $showtime=date("Y-m-d H:i:s");
 mysql_query("insert into tb_adv (name,keywords,picture,link,time) values ('$name','$keywords','$picture','$link','$showtime')",$conn);
 echo "<script>alert('添加成功!');history.back();</script>";
?>