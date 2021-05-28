<?php error_reporting(0); ?>
<?php date_default_timezone_set("PRC");
header("Content-type:text/html;charset=utf-8");
//session_start();
include("../page/conn/conn.php");
$id=$_GET[id];
$sql=mysql_query("select * from tb_leaveword where id='".$id."'",$conn);
$info=mysql_fetch_array($sql);

$title=$_POST[title];
$content=$_POST[content];
$time=date("Y-m-d H:i:s");
$isopen=$_POST[isopen];
if ($_POST){
    echo $_POST['radio'];
}
mysql_query("update tb_leaveword set title='$title',content='$content',time='$time',isopen='$isopen' where id='".$id."'",$conn);
//header("location:userleaveword.php");
echo "<script>alert('修改成功');window.location='lookmyleaveword.php';</script>";
?>
ID:<?php echo $info[id];?>
