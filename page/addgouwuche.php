<?php error_reporting(0); ?>
<?php
	header("Content-type:text/html;charset=utf-8");  
session_start();
include("../page/conn/conn.php");
if($_SESSION[username]==""){
  echo "<script>alert('请先登录后购物!');history.back();</script>"; 
  exit;
 }
$id=strval($_GET[id]);
$sql=mysql_query("select * from tb_book where id='".$id."'",$conn); 
$info=mysql_fetch_array($sql);
if($info[shuliang]<=0){
   echo "<script>alert('该书籍已经售完!');history.back();</script>";
   exit;
 }
  $array=explode("@",$_SESSION[producelist]);
  for($i=0;$i<count($array)-1;$i++){
	 if($array[$i]==$id){
	     echo "<script>alert('该书籍已经在您的购物车中!');history.back();</script>";
		 exit;
	  }
	}
  $_SESSION[producelist]=$_SESSION[producelist].$id."@";
  $_SESSION[quatity]=$_SESSION[quatity]."1@";
  header("location:gouwuche.php");
?> 