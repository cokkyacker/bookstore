<?php error_reporting(0); ?>
<?php date_default_timezone_set("PRC");
session_start();
include("../page/conn/conn.php");
header("Content-type:text/html;charset=utf-8");  
$name=$_POST[usernc];
$pwd1=$_POST[p1];
$pwd=($_POST[p1]);
$truename=$_POST[truename];
$sfzh=$_POST[sfzh];
$tel=$_POST[tel];
$dizhi=$_POST[dizhi];
$youbian=$_POST[yb];
$regtime=date("Y-m-d H:i:s");
$dongjie=0;
$pwd2=md5($pwd);
$sql=mysql_query("select * from tb_user where name='".$name."'",$conn);
$info=mysql_fetch_array($sql);
if($info==true)
 {
   echo "<script>alert('该昵称已经存在!');history.back();</script>";
   exit;
 }
 else
 {  
    mysql_query("insert into tb_user (name,pwd,dongjie,truename,sfzh,tel,dizhi,youbian,regtime) 
values ('$name','$pwd2','$dongjie','$truename','$sfzh','$tel','$dizhi','$youbian','$regtime')",$conn);
     $_SESSION['username'];//注册新的session变量
     $username=$name;
     $_SESSION['producelist'];//发给用户一个购物车
     $producelist="";//初始化购物车内没有商品
     $_SESSION['quatity'];
     $quatity="";

    echo "<script>alert('恭喜，注册成功请登录!');window.location='reg.php';</script>";
 }
?>
