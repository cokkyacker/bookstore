
<?php error_reporting(0); ?>

<?php
header("Content-type:text/html;charset=utf-8");
$nc=$_GET[nc];
//echo "$nc";
include("conn/conn.php");
if($nc=="")
{
    echo "<script>alert('请输入昵称!');history.back()</script>";

}
else
{
    $sql=mysql_query("select * from tb_user where name='".$nc."'",$conn);
    $info=mysql_fetch_array($sql);
    if($info==true)
    {
        echo "<script>alert('对不起,该昵称已被占用!');history.back()</script>";
    }
    else
    {
        echo "<script>alert('恭喜,该昵称未被占用!');history.back()</script>";
    }
}
?>
