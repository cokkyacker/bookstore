<?php error_reporting(0); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
session_start();
if($_SESSION[username]=="")
{
    echo "<script>alert('您还没有登录,请先登录!');history.back();</script>";
    exit;
}
?>
<?php
include("../page/conn/conn.php");
$id=$_GET[id];
$sql=mysql_query("select * from tb_leaveword where id='".$id."'",$conn);
$info=mysql_fetch_array($sql);

$sql=mysql_query("select * from tb_user where name='".$_SESSION[username]."'",$conn);
$info1=mysql_fetch_array($sql);
$id1=$info[userid];
$id2=$info1[id];
if ($id1 !== $id2) {
    echo "<script>alert('用户名不匹配，请按确定返回上一界面');history.back();</script>";
}else{
?>
<?php
include("../page/top.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<div style="max-width:950px;margin:0 auto">
    <body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar" bgcolor="#ADD8E6">

    <table width="966" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
        <title>修改用户密码</title>
        <tr>
            <td width="129" height="438" align="center" valign="top" bgcolor="#FFFFFF">
                <div align="center">
                    <?php include("../page/left_menu.php");?>

                </div></td>
            <td width="761" align="center" valign="top" bgcolor="#FFFFFF">
                <table width="700" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td></td>
                    </tr>
                </table>
                <table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td><div align="left">&nbsp;&nbsp;当前用户&nbsp;<span style="color: #0000FF">:&nbsp</span><?php echo $_SESSION[username];?><span style="color: #0000FF">&nbsp;|&nbsp;</span><a href="../page/usercenter.php">修改个人信息</a>&nbsp;<span style="color: #0000FF">|&nbsp;</span><a href="../page/changeuserpwd.php">修改密码</a>&nbsp;<span style="color: #0000FF">|&nbsp;</span><a href="../page/lookmyleaveword.php">我的留言</a>&nbsp;<span style="color: #0000FF">|&nbsp;</span><a href="../page/logout.php">注销离开</a></div></td>

                    </tr>
                </table>
                <?php
                include("../page/conn/conn.php");
                $id=$_GET[id];
                $sql=mysql_query("select * from tb_leaveword where id='".$id."'",$conn);
                $info=mysql_fetch_array($sql);

                ?>
                <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td height="20" bgcolor="#FFFFFF"><div align="center" style="color: #000000">留言修改</div></td>
                    </tr>
                    <tr>
                        <td height="20" >
                            <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                                <form name="form2" method="post" action="../page/saveeditmyleaveword.php?id=<?php echo $info[id];?>" onSubmit="return chkinput1(this)">

                                <tr>
                                    <td width="102" height="25" bgcolor="#FFFFFF"><div align="center">留言主题：</div></td>
                                    <td width="395" bgcolor="#FFFFFF"><div align="left">
                                            <input value="<?php echo $info[title];?>" onkeyup="this.value=this.value.replace(/^ +| +$/g,'')" type="text" name="title" size="30" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                        </div></td>
                                </tr>
                                <tr>
                                    <td height="100" bgcolor="#FFFFFF"><div align="center">留言内容：</div></td>
                                    <td height="100" bgcolor="#FFFFFF"><div align="left">
                                            <textarea  onkeyup="this.value=this.value.replace(/^ +| +$/g,'')" name="content" rows="8" cols="60" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"><?php echo $info[content];?>"</textarea>
                                        </div></td>
                                </tr>
                             <!--   <tr>
                                    <td width="87" height="25" bgcolor="#FFFFFF"><div align="left">留言主题:</div></td>
                                    <td width="392" height="25" bgcolor="#FFFFFF"><div align="left">
                                            <input type="text" name="email" size="25" class="inputcssnull" value="<?php echo $info[title];?>">
                                        </div></td>
                                </tr>
                                <tr>
                                    <td height="100" bgcolor="#FFFFFF"><div align="left">留言内容:</div></td>
                                    <td colspan="3" bgcolor="#FFFFFF"><div align="left">
                                            <input type="text" name="email" height="100" size="100" class="inputcssnull" value="<?php echo $info[content];?>">
                                        </div></td>
                                </tr>-->
                                    <tr>
                                        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="left">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;是否公开：
                                                <input type="radio" name="isopen" value="1" id="yes" />
                                                <!--把汉字与单选按钮连接上，单击汉字形同于单击单选按钮-->
                                                <label for="yes">是</label>
                                                &nbsp;&nbsp;
                                                <input type="radio" name="isopen" value="0"  />否&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                <input name="submit2" type="submit" class="buttoncss" value="提交">
                                                &nbsp;&nbsp;
                                                <input name="reset" type="reset" class="buttoncss" value="重置">
                                            </div></td>
                                    </tr>
                                </form>
                            </table></td>
                    </tr>

                    <tr>
                    </tr>
                </table>
        </tr>
    </table>

                <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</div>
    <?php
}
?>
<?php
include("bottom.php");
?>
