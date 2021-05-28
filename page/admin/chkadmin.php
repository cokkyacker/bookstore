<?php error_reporting(0); ?>
<?PHP
header("Content-Type: text/html; charset=utf8");
//  if(!isset($_POST["imageField"])){
//      exit("错误执行");
//  }//检测是否有submit操作

include('conn/conn.php');//链接数据库
$name = $_POST['name'];//post获得用户名表单值
$passowrd = $_POST['pwd'];//post获得用户密码单值

if ($name && $passowrd){//如果用户名和密码都不为空
    $sql = "select * from tb_admin where name = '$name' and pwd='$passowrd'";//检测数据库是否有对应的username和password的sql
    $result = mysql_query($sql);//执行sql
    $rows=mysql_num_rows($result);//返回一个数值
    if($rows){//0 false 1 true
        $row = mysqli_fetch_array($result);  //将数据以索引方式储存在数组中
        header("refresh:0;url=default.php");//如果成功跳转至welcome.html页面
        session_start();
        $_SESSION['name']=$name;


        exit;
    }else{
        echo "用户名或密码错误";
        echo "
                    <script>
                            setTimeout(function(){window.location.href='login.php';},1000);
                    </script>

                ";//如果错误使用js 1秒后跳转到登录页面重试;
    }


}else{//如果用户名或密码有空
    echo "表单填写不完整";
    echo "
                      <script>
                            setTimeout(function(){window.location.href='login.php';},1000);
                      </script>";

    //如果错误使用js 1秒后跳转到登录页面重试;
}

mysql_close();//关闭数据库
?>
