<?php error_reporting(0); ?>
<?php
include("../page/top.php");
include("../page/function.php");
$spid=$_GET[spid];
$id=$_GET[id];
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="../css/font.css">
	<div style="max-width:950px;margin:0 auto">
        <body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar" bgcolor="#ADD8E6">

        <table width="966" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="109" height="438" valign="top" bgcolor="#FFFFFF">
    	<div align="center">
      <?php
	   include("../page/left_menu.php");
	?>
      </div></td>
    <td width="781" valign="top" bgcolor="#FFFFFF">
    	<table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><div align="left"><a href="javascript:history.back();">返回</a></div></td>
      </tr>
    </table>
      <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr bgcolor="#FFFFFF">
          <td height="25" colspan="4"><div align="center" style="color: #990000">书籍评论</div></td>
        </tr>
        <?php
       $sql=mysql_query("select count(*) as total from tb_pingjia where spid='".$_GET[id]."'",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info[total];
	   if($total==0)
	   {
	     echo "本书籍暂无评论信息!";
	   }
	   else
	   {
	       $pagesize=3;
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
             $sql1=mysql_query("select * from tb_pingjia where spid='".$_GET[id]."' order by time desc limit ".($page-1)*$pagesize.",$pagesize ",$conn);
             while($info1=mysql_fetch_array($sql1))
		     {
		  ?>
        <tr>
          <td width="200" height="20"><div align="center">书籍名称：</div></td>
          <td width="200">
          	<div align="left">
	              <?php 
			     $spid=$info1[spid];
				 $sql2=mysql_query("select title from tb_book where id=".$spid."",$conn);
				 $info2=mysql_fetch_array($sql2);
				 echo $info2[title];
			  ?>
	          </div>
          </td>
          <td width="100"><div align="center">评论时间：</div></td>
          <td width="229"><div align="left"><?php echo $info1[time];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center">评论者：</div></td>
          <td height="20" colspan="3"><div align="left">
              <?php 
		     $spid=$info1[userid];
			 $sql3=mysql_query("select name from tb_user where id=".$spid."",$conn);
			 $info3=mysql_fetch_array($sql3);
			 echo $info3[name];
			
		  ?>
          </div></td>
        </tr>
        <tr>
          <td height="20"><div align="center">评论主题：</div></td>
          <td height="20" colspan="3"><div align="left"><?php echo unhtml($info1[title]);?></div></td>
        </tr>
        <tr>
          <td height="40"><div align="center">评论内容：</div></td>
          <td height="40" colspan="3" valign="bottom"><div align="left"><?php echo unhtml($info1[content]);?></div></td>
        </tr>
        <tr>
          <td height="10" colspan="4" background="../img/images/line1.gif"></td>
        </tr>
        <?php
		   }
		  }
		  ?>
      </table>
      <table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="right"> &nbsp;本站共有该书籍评论&nbsp;
                  <?php
		   echo $total;
		  ?>
&nbsp;条&nbsp;每页显示&nbsp;<?php echo $pagesize;?>&nbsp;条&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount; ?>&nbsp;页
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="../page/showpl.php?page=1" title="首页"><font face="webdings"> 9 </font></a> <a href="../page/showpl.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>&spid=<?php echo $spid;?>&id=<?php echo $id;?>" title="前一页"><font face="webdings"> 7 </font></a>
        <?php
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="../page/showpl.php?page=<?php echo $i;?>&spid=<?php echo $spid;?>&id=<?php echo $id;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){	 
		  ?>
        <a href="../page/showpl.php?page=<?php echo $i;?>&spid=<?php echo $spid;?>&id=<?php echo $id;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="../page/showpl.php?page=<?php echo $page-1;?>&spid=<?php echo $spid;?>&id=<?php echo $id;?>" title="后一页"><font face="webdings"> 8 </font></a> <a href="../page/editgoods.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>&spid=<?php echo $spid;?>&id=<?php echo $id;?>" title="尾页"><font face="webdings"> : </font></a>
        <?php }?>
          </div></td>
        </tr>
      </table></td>
  </tr>
</table>
</div>
<?php
include("bottom.php");
?>