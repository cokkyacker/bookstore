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
include("../page/function.php");
$sql=mysql_query("select * from tb_user where name ='".$_SESSION[username]."'",$conn);
$info3=mysql_fetch_array($sql);
$id=$info3[id]; ?>
<?php
include("../page/top.php");
?>

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
                        <td><div align="left">&nbsp;&nbsp;当前用户&nbsp;<span style="color: #0000FF">:&nbsp</span><?php echo $_SESSION[username];?><span style="color: #0000FF">&nbsp;|&nbsp;</span><a href="../page/usercenter.php">修改个人信息</a>&nbsp;<span style="color: #0000FF">|&nbsp;</span><a href="../page/changeuserpwd.php">修改密码</a>&nbsp;<span style="color: #0000FF">|&nbsp;</span><a href="../page/../page/lookmyleaveword.php">我的留言</a>&nbsp;<span style="color: #0000FF">|&nbsp;</span><a href="../page/logout.php">注销离开</a></div></td>


                <p>
                  <!--  ID:<?php //echo $id;?>-->
                    <?php
                    $sql=mysql_query("select count(*) as total from tb_leaveword where userid='$id' ",$conn);
                    $info=mysql_fetch_array($sql);
                    $total=$info[total];
                    if($total==0)
                    {
                        echo "没有发布任何留言!";
                    }
                    else
                    {
                    ?>
                </p>



                <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td height="20" bgcolor="#FFFFFF"><div align="center" style="color: #000000">我的留言</div></td>
                    </tr>
                    <tr>
                        <td height="20" >
                            <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="200" bgcolor="#FFFFFF"><div align="center">留言主题</div></td>
                                    <td width="100" bgcolor="#FFFFFF"><div align="center">状态</div> </td>
                                    <td width="50" bgcolor="#FFFFFF"><div align="center">回复</div> </td>
                                    <td width="150" bgcolor="#FFFFFF"><div align="center">留言时间</div></td>
                                    <td width="100" bgcolor="#FFFFFF"><div align="center">操作</div></td>
                                </tr>
                                <?php


                                $pagesize=20;
                                if ($total<=$pagesize){
                                    $pagecount=1;
                                }
                                if(($total%$pagesize)!=0){
                                    $pagecount=intval($total/$pagesize)+1;

                                }else{
                                    $pagecount=$total/$pagesize;

                                }
                                if(($_GET[page])==""){
                                    $page=1;

                                }else{
                                    $page=intval($_GET[page]);

                                }




                                $sql1=mysql_query("select * from tb_leaveword 
                                where userid= '$id'
                                order by time 
                                desc limit ".($page-1)*$pagesize.",$pagesize ",$conn);
                                while($info1=mysql_fetch_array($sql1))
                                {
                                    ?>

                                    <tr>
                                        <td height="20" bgcolor="#FFFFFF"><div align="left"><?php echo unhtml($info1[title]);?></div></td>
                                        <td height="20" bgcolor="white"><div align="center">
                                                <?php if ($info1[isOpen]==1&&$info1[pass]==1){?>公开(已发布)
                                                <?php  }else if ($info1[isOpen]==1&&$info1[pass]==0){?>公开(未审核)
                                                <?php   }else if ($info1[isOpen]==0&&$info1[pass]==1){?>不公开(已审核)
                                                <?php    }else{ ?>不公开(未审核)
                                                <?php   } ?>
                                            </div> </td>
                                        <td height="20" bgcolor="white"><div align="center">
                                                <?php
                                                if ($info1[reply]!=="") {
                                                    ?>
                                                    已回复
                                                    <?php
                                                }else{
                                                    ?>未回复
                                               <?php }?>

                                            </div> </td>
                                        <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[time];?></div></td>
                                        <td height="20" bgcolor="#FFFFFF"><div align="center">
                                        <?php
                                            if($info1[pass]!="1"){
                                        ?>
                                        <a href="../page/editmyleaveword.php?id=<?php echo $info1[id];?>">修改&nbsp;&nbsp;</a>
                                        <?php
                                            }
                                        ?>
                                        <a href="../page/detailmyleaveword.php?id=<?php echo $info1[id];?>">详细</a>
                                            </div></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </table></td>
                    </tr>

                    <tr>
                        <td width="652" height="20" bgcolor="#FFFFFF"><div align="left">
	&nbsp;本站共有用户留言&nbsp;<?php
                        echo $total;
                        ?>&nbsp;条&nbsp;每页显示&nbsp;<?php echo $pagesize;?>&nbsp;条&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount; ?>&nbsp;页
        <?php
                        if($page>=2)
                        {
                            ?>
        <a href="../page/lookmyleaveword.php?page=1" title="首页"><font face="webdings"> 9 </font></a>
		<a href="../page/lookmyleaveword.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="前一页"><font face="webdings"> 7 </font></a>
        <?php
                        }
                        if($pagecount<=4){
                            for($i=1;$i<=$pagecount;$i++){
                                ?>
        <a href="../page/lookmyleaveword.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
                            }
                        }else{
                            for($i=1;$i<=4;$i++){
                                ?>
        <a href="../page/lookmyleaveword.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="../page/lookmyleaveword.php?page=<?php echo $page-1;?>" title="后一页"><font face="webdings"> 8 </font></a>
		<a href="../page/lookmyleaveword.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="尾页"><font face="webdings"> : </font></a>
        <?php }?>

	</div></td>
                    </tr>
                <!--    <p>userid:<?php //echo $info3[id];?></p>-->
                </table>

                <?php
                }
                ?>
                    </tr>
                </table>
                <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</div>
<?php
include("bottom.php");
?>