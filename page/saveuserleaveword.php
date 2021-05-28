<?php error_reporting(0); ?>
<?php date_default_timezone_set("PRC");
header("Content-type:text/html;charset=utf-8");
session_start();
$title=$_POST[title];
$content=$_POST[content];
$time=date("Y-m-d H:i:s");
$isopen=$_POST[isopen];
if ($_POST){
    echo $_POST['radio'];
}

include("../page/conn/conn.php");

$sql=mysql_query("select * from tb_user where name='".$_SESSION[username]."'",$conn);
$info=mysql_fetch_array($sql);
$userid=$info[id];
mysql_query("insert into tb_leaveword (title,content,time,userid,isopen) values ('$title','$content','$time','$userid','$isopen')",$conn);
//header("location:userleaveword.php");
echo "<script>alert('留言成功');window.location='userleaveword.php';</script>";
?>