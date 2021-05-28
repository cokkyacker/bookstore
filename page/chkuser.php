<?php
	 error_reporting(0); ?>
	<script src="md5/md5.js"></script>
<?php
include("../page/conn/conn.php");
header("Content-type:text/html;charset=utf-8");
$username=$_POST[username];
$userpwd1=$_POST[userpwd];
$userpwd=md5($userpwd1);
$yz=$_POST[yz];
$num=$_POST[num];
if(strval($yz)!=strval($num)){
  echo "<script>alert('验证码输入错误!');history.go(-1);</script>";
  exit;
 }
class chkinput{
   var $name;
   var $pwd;

   function chkinput($x,$y){
     $this->name=$x;
     $this->pwd=$y;
    }
   function checkinput(){
     include("../page/conn/conn.php");
     $sql=mysql_query("select * from tb_user where name= '".$this->name."' ", $conn);
     $info=mysql_fetch_array($sql);
     if($info==false){
          echo "<script language='javascript'>alert('不存在此用户！');history.back();</script>";
          exit;
       }
      else{
	      if($info[dongjie]==1){
			   echo "<script language='javascript'>alert('该用户已经被冻结！');history.back();</script>";
               exit;
			}
			 
          if($info[pwd]==$this->pwd)
            {  
			   session_start();
	           $_SESSION['username']=$info['name'];

				$_SESSION['producelist'];//发送给用户一个购物车
				$producelist="";//购物车为空
				$_SESSION['quatity'];
				$quatity="";
               header("location:../index.php");
               exit;
            }
          else {
             echo "<script language='javascript'>alert('密码输入错误！');history.back();</script>";
             exit;
           }

      }    
   }
 }

    $obj=new chkinput(trim($username),trim($userpwd)); //创建对象
    $obj->checkinput();//调用类
?>