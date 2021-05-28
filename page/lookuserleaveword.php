<?php error_reporting(0); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
include("../page/top.php");
?>
<div style="max-width:950px;margin:0 auto">
    <body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar" bgcolor="#ADD8E6">

    <table width="966" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="109" height="438" valign="top" bgcolor="#FFFFFF">
                <div align="center">
                    <?php include("../page/left_menu.php");?>
                </div></td>
            <td width="761" align="center" valign="top" bgcolor="#FFFFFF">
                <table width="700" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                        </td>
                    </tr>
                </table>
                <p>
                    <?php
                    include("../page/conn/conn.php");
                    include("../page/function.php");
                    $sql=mysql_query("select count(*) as total from tb_leaveword  ",$conn);
                    $info=mysql_fetch_array($sql);
                    $total=$info[total];
                    if($total==0)
                    {
                        echo "本站暂无用户留言!";
                    }
                    else
                    {
                    ?>
                </p>
                <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td height="20" bgcolor="#FFFFFF"><div align="center" style="color: #000000">留言板</div></td>
                    </tr>
                    <tr>
                        <td height="150" bgcolor="#555555">
                            <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                        <td height="20" >
                            <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="350" bgcolor="#FFFFFF"><div align="center">留言主题</div></td>
                                        <td width="150" bgcolor="#FFFFFF"><div align="center">留言者</div></td>
                                        <td width="150" bgcolor="#FFFFFF"><div align="center">留言时间</div></td>
                                        <td width="50" bgcolor="#FFFFFF"><div align="center">操作</div></td>
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
                                where isOpen=1 and pass=1 
                                order by time desc limit ".($page-1)*$pagesize.",$pagesize ",$conn);
                                while($info1=mysql_fetch_array($sql1))
                                {
                                    ?>
                                    <tr>
                                        <td height="20" bgcolor="#FFFFFF"><div align="left"><?php echo unhtml($info1[title]);?></div></td>
                                        <td height="20" bgcolor="#FFFFFF"><div align="center">
                                                <?php
                                                $sql2=mysql_query("select name from tb_user where id='".$info1[userid]."'",$conn);
                                                $info2=mysql_fetch_array($sql2);
                                                echo $info2[name];
                                                ?>
                                            </div></td>
                                        <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[time];?></div></td>
                                        <td height="20" bgcolor="#FFFFFF"><div align="center"><a href="../page/detailuserleaveword.php?id=<?php echo $info1[id];?>">详细</a>
                                            </div></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </table></td>
                    </tr>

                    <tr>
                        <td width="652" height="20" bgcolor="#FFFFFF"><div align="left">
	每页显示&nbsp;<?php echo $pagesize;?>&nbsp;条&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount; ?>&nbsp;页
        <?php
                        if($page>=2)
                        {
                            ?>
        <a href="../page/lookuserleaveword.php?page=1" title="首页"><font face="webdings"> 9 </font></a>
		<a href="../page/lookuserleaveword.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="前一页"><font face="webdings"> 7 </font></a>
        <?php
                        }
                        if($pagecount<=4){
                            for($i=1;$i<=$pagecount;$i++){
                                ?>
        <a href="../page/lookuserleaveword.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
                            }
                        }else{
                            for($i=1;$i<=4;$i++){
                                ?>
        <a href="../page/lookuserleaveword.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="../page/lookuserleaveword.php?page=<?php echo $page-1;?>" title="后一页"><font face="webdings"> 8 </font></a>
		<a href="../page/lookuserleaveword.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="尾页"><font face="webdings"> : </font></a>
        <?php }?>

	</div></td>
                    </tr>
    </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    </body>
    <?php
    }
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</div>
<?php
include("bottom.php");
?>