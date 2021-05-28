<?php error_reporting(0); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理库存</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">

.style1 {color: #FFFFFF}

</style>
</head>
<?php
  include("conn/conn.php");
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<?php
	   $sql=mysql_query("select count(*) as total from tb_book ",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info[total];
	   if($total==0){
	     echo "暂无库存!";
	   }
	   else
	    {
?>
<form name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="75" bgcolor="#666666">
    	<table width="750" height="86" border="0" cellpadding="0" cellspacing="1">
      
	  <tr bgcolor="#FFCF60">
        <td height="20" colspan="10" bgcolor="#CCCC66"><div align="center" class="style1">管理库存</div></td>
      </tr>
      <tr>
        <td width="59" height="28" bgcolor="#FFFFFF"><div align="center">商品ID</div></td>
        <td width="80" bgcolor="#FFFFFF"><div align="center">书籍名称</div></td>
        <td width="60" bgcolor="#FFFFFF"><div align="center">剩余数量</div></td>
        <td width="60" bgcolor="#FFFFFF"><div align="center">卖出数量</div></td>
        <!--<td width="80" bgcolor="#FFFFFF"><div align="center">上架时间</div></td>-->
        <td width="68" bgcolor="#FFFFFF"><div align="center">操作</div></td>
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
			 
           $sql1=mysql_query("select * from tb_book order by cishu desc limit ".($page-1)*$pagesize.",$pagesize",$conn);
		   while($info1=mysql_fetch_array($sql1))
		    {
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">
          <div align="center"> <?php echo $info1[id]; ?>
        </div></td>
        <td height="25" bgcolor="#FFFFFF">
          
          <div align="center"><?php echo $info1[title];?></div></td>
        
        <td height="25" bgcolor="#FFFFFF">
        	<div align="center">
        		<?php 
        			if($info1[shuliang]<=0) {
        				echo "售完，请及时补充！";
        				}
        				else if($info1[shuliang]<10){
        					echo "剩余库存为$info1[shuliang]件，请及时补充！";
        				}
        				else {
        					echo $info1[shuliang];
        					}
        				?>
        	</div>
        </td>
        
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[cishu];?></div></td>
       
        <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="changenumber.php?id=<?php echo $info1[id];?>">更改</a></div></td>
      </tr>
	 <?php
	    }
        
      ?>
	 
    </table></td>
  </tr>
</table>
<table width="750" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
   
    <td width="585"><div align="right">&nbsp;本站共有书籍
        <?php
		   echo $total;
		  ?>
        &nbsp;本&nbsp;每页显示&nbsp;<?php echo $pagesize;?>&nbsp;本&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount; ?>&nbsp;页
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="editgoods.php?page=1" title="首页"><font face="webdings"> 9 </font></a> <a href="editgoods.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="前一页"><font face="webdings"> 7 </font></a>
        <?php
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="editgoods.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){	 
		  ?>
        <a href="editgoods.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="number.php?page=<?php echo $page-1;?>" title="后一页"><font face="webdings"> 8 </font></a> <a href="number.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="尾页"><font face="webdings"> : </font></a>
        <?php }?>
    </div></td>
  </tr>
</table>
<p>&nbsp;</p>
</form>
  <?php
	}
  ?>
</body>
</html>
