<?php error_reporting(0); ?>
<?php
 include("../page/top.php");
?>
<div style="max-width:950px;margin:0 auto">
    <body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar" bgcolor="#ADD8E6">

    <table width="966" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="109" height="438" valign="top" bgcolor="#FFFFFF">
    	<?php include("../page/left_menu.php");?></td>
    <td width="781" align="center" valign="top" bgcolor="#FFFFFF">
    	<table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0" class="top">
      <tr>
        <td>
        	<div align="left"> <img class="imga" src="../img/fl.png" width="22" height="22">&nbsp;<span class="fb">书籍分类：</span>
                <?php
		  include("../page/conn/conn.php");
		    $sql=mysql_query("select * from tb_type order by id desc",$conn);
		    $info=mysql_fetch_object($sql);
			if($info==false)
			{
			  echo "本站暂无书籍!";
			}
		    else 
			{
			  do
			  {
			    echo "<a href='../page/showfenlei.php?id=".$info->id."'>".$info->typename."&nbsp;</a>";
			  
			   }while($info=mysql_fetch_object($sql)); 
		    }
		  ?>
        </div></td>
      </tr>
    </table>
      <?php
	   if($_GET[id]=="")
	   {
	     $sql=mysql_query("select * from tb_type order by id desc limit 0,1",$conn);
		 $info=mysql_fetch_array($sql);
		 $id=$info[id];
	   }
	   else
	   {
         $id=$_GET[id];
	   }
	   $sql1=mysql_query("select * from tb_type where id=".$id."",$conn);
	   $info1=mysql_fetch_array($sql1);
	   
       $sql=mysql_query("select count(*) as total from tb_book where typeid='".$id."' order by addtime desc ",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info[total];
	   if($total==0)
	   {
	     echo "<div align='center'>本站暂无该类产品!</div>";
	   } 
	   else
	   {
	  ?>
      <table width="750" height="25" border="0" align="center" cellpadding="0" cellspacing="0" class="top2">
        <tr>
          <td bgcolor="#EEEEEE">
          	<div align="left">
          		<span style="color: #666666; font-weight: bold">
          			<span style="color: #000000; width: 60px;">&nbsp;本类书籍&gt;&gt;</span>
          			<?php echo $info1[typename];?></span> </div></td>
        </tr>
      </table>
      <table width="750" height="10" border="0" align="center" cellpadding="0" cellspacing="0" >
        <tr>
          <td background="../img/images/line1.gif"></td>
        </tr>
      </table>
      <table width="750" height="70" border="0" align="center" cellpadding="0" cellspacing="0">
        <?php
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
			 
             $sql1=mysql_query("select * from tb_book where typeid=".$id." order by addtime desc limit ".($page-1)*$pagesize.",$pagesize ",$conn);
             while($info1=mysql_fetch_array($sql1))
		     {
		  ?>
        <tr>
          <td width="130"  rowspan="6">
          	<div align="center">
              <?php
			 if($info1[tupian]=="")
			 {
			   echo "暂无图片!";
			 }
			 else
			 {
			?>
              <a href="../page/lookinfo.php?id=<?php echo $info1[id];?>">
              	<img border="0" width="90" height="120" src="<?php echo $info1[tupian];?>"></a>
              <?php
			 }
			?>
          </div></td>
          <td width="120" height="20">
          	<div align="center" style="color: #000000; width: 60px;">书籍名称：</div></td>
          <td colspan="5"><div align="left"><a href="../page/lookinfo.php?id=<?php echo $info1[id];?>"><?php echo $info1[title];?></a></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">出版社：</div></td>
          <td width="101" height="20"><div align="left"><?php echo $info1[publish];?></div></td>
          <td width="62"><div align="center" style="color: #000000">作者：</div></td>
          <td colspan="3"><div align="left"><?php echo $info1[anthor];?></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">书籍简介：</div></td>
          <td height="20" colspan="5"><div align="left"><?php echo $info1[jianjie];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">上市日期：</div></td>
          <td height="20"><div align="left"><?php echo $info1[addtime];?></div></td>
          <td height="20"><div align="center" style="color: #000000">剩余数量:</div></td>
          <td width="69" height="20"><div align="left"><?php echo $info1[shuliang];?></div></td>
          <td width="63"><div align="center" style="color: #000000">装订：</div></td>
          <td width="73"><div align="left"><?php echo $info1[bind];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">商场价：</div></td>
          <td height="20"><div align="left"><?php echo $info1[shichangjia];?>元</div></td>
          <td height="20"><div align="center" style="color: #000000">会员价：</div></td>
          <td height="20"><div align="left"><?php echo $info1[huiyuanjia];?>元</div></td>
          <td height="20"><div align="center" style="color: #000000">折扣：</div></td>
          <td height="20"><div align="left"><?php echo (ceil(100-($info1[huiyuanjia]/$info1[shichangjia])*100))."%";?></div></td>
        </tr>
        <tr>
          <td height="20" colspan="6" width="461"><div align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="../page/addgouwuche.php?id=<?php echo $info1[id];?>"><img src="../img/images/b1.gif" width="50" height="15" border="0" style=" cursor:hand"></a></div></td>
        </tr>
        <tr>
          <td height="10" colspan="7" background="../img/images/line1.gif"></td>
        </tr>
        <?php
	    }
		
		?>
      </table>
      <table width="750" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="right"> &nbsp;本站共有该类书籍&nbsp;
                  <?php
		   echo $total;
		  ?>
&nbsp;本&nbsp;每页显示&nbsp;<?php echo $pagesize;?>&nbsp;本&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount; ?>&nbsp;页
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="../page/showfenlei.php?id=<?php echo $id;?>&page=1" title="首页"><font face="webdings"> 9 </font></a> <a href="../page/showfenlei.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="前一页"><font face="webdings"> 7 </font></a>
        <?php
		  }
		          if($pagecount<=4){
		           for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="../page/showfenlei.php?id=<?php echo $id;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){	 
		  ?>
        <a href="../page/showfenlei.php?id=<?php echo $id;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="../page/showfenlei.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="后一页"><font face="webdings"> 8 </font></a> <a href="../page/showfenlei.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="尾页"><font face="webdings"> : </font></a>
        <?php }?>
          </div></td>
        </tr>
      </table>
    <?php
	   }
	  
	  ?>
    </td>
  </tr>
</table>
</div>
<?php
include("bottom.php");
?>