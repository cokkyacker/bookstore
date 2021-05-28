<?php error_reporting(0); ?>
<?php date_default_timezone_set("PRC");
header("Content-type:text/html;charset=utf-8");
//session_start();


include("conn/conn.php");
$id=$_GET[id];
$reply=$_POST[reply];
$replytime=date("Y-m-d H:i:s");
mysql_query("update tb_leaveword set reply='$reply',replytime='$replytime' where id='".$id."'",$conn);

//$sql=mysql_query("select * from tb_leaveword where id= '".$id."'",$conn);
//$info=mysql_fetch_array($sql);




//mysql_query("update tb_leaveword set reply where id='".$id."'",$conn);
//$sql=mysql_query("select * from tb_admin where name='".$_SESSION[name]."'",$conn);
//$info=mysql_fetch_array($sql);
//$userid=$info[id];
//mysql_query("insert into tb_leaveword (reply,replytime) values ('$reply','$replytime') where id='".$id."'",$conn);
//header("location:userleaveword.php");

//header("location:replyleaveword.php?id=".$id."");
echo "<script>alert('回复成功');window.location='editleaveword.php?id=".$id."';</script>";
?>
ID:<?php echo $info[id];?>
