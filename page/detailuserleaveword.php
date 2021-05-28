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
include("conn/conn.php");
$id=$_GET[id];
$sql=mysql_query("select * from tb_leaveword where id='".$id."'",$conn);
$info=mysql_fetch_array($sql);
if ($info[isOpen]==0 || $info[pass]==0) {
    echo "<script>alert('留言不公开或未审核');history.back();</script>";
}else{?>
<?php
include("../page/top.php");
?>

    <div style="max-width:950px;margin:0 auto">
        <body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar" bgcolor="#ADD8E6">

        <table width="966" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td width="109" height="438" valign="top" bgcolor="#FFFFFF">
                    <div align="center">
                        <?php include("../page/left_menu.php"); ?>
                    </div>
                </td>
                <td width="761" align="center" valign="top" bgcolor="#FFFFFF">
                    <table width="700" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td></td>
                        </tr>
                    </table>
                    <?php
                    include("../page/conn/conn.php");
                    $id = $_GET[id];
                    $sql = mysql_query("select * from tb_leaveword where id='" . $id . "'", $conn);
                    $info = mysql_fetch_array($sql);

                    ?>
                    <table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                    <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="20" bgcolor="#FFFFFF">
                                <div align="center" style="color: #000000">留言详细</div>
                            </td>

                        <tr>
                            <td height="20">
                                <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="87" height="25" bgcolor="#FFFFFF">
                                            <div align="left">留言主题:</div>
                                        </td>
                                        <td width="392" height="25" bgcolor="#FFFFFF">
                                            <div align="left">
                                                <?php if ($info[isOpen]==0 || $info[pass]==0) { ?>留言不公开或未审核
                                                <?php    }else{
                                                    echo $info[title];} ?>
                                            </div>
                                        </td>
                                        <td width="83" bgcolor="#FFFFFF">
                                            <div align="center">留言时间:</div>
                                        </td>
                                        <td width="183" bgcolor="#FFFFFF">
                                            <div align="center">
                                                <?php if ($info[isOpen]==0 || $info[pass]==0) { ?>留言不公开或未审核
                                                <?php    }else{
                                                    echo $info[time];} ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="100" bgcolor="#FFFFFF">
                                            <div align="left">留言内容:</div>
                                        </td>
                                        <td colspan="3" bgcolor="#FFFFFF">
                                            <div align="left">
                                                <?php if ($info[isOpen]==0 || $info[pass]==0) { ?>留言不公开或未审核
                                                <?php    }else{
                                                    echo $info[content];} ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="87" height="25" bgcolor="#FFFFFF">
                                            <div align="left">管理员回复:</div>
                                        </td>
                                        <td width="392" height="25" bgcolor="#FFFFFF">
                                            <div align="left">
                                                <?php if ($info[isOpen]==0 || $info[pass]==0) { ?>留言不公开或未审核
                                                <?php    }else{
                                                    echo $info[reply];} ?>
                                            </div>
                                        </td>
                                        <td width="83" bgcolor="#FFFFFF">
                                            <div align="center">回复时间:</div>
                                        </td>
                                        <td width="183" bgcolor="#FFFFFF">
                                            <div align="center">
                                                <?php if ($info[isOpen]==0 || $info[pass]==0) { ?>留言不公开或未审核
                                                <?php    }else{
                                                    echo $info[replyTime];} ?>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
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
