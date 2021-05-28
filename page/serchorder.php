<?php error_reporting(0); ?>
<?php
 include("../page/conn/conn.php");
 include("../page/top.php");
?>
<style type="text/css">

.style1 {color: #990000}

</style>
<div style="max-width:950px;margin:0 auto">
    <body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar" bgcolor="#ADD8E6">

    <table width="966" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="129" valign="top" bgcolor="#FFFFFF">
    	<?php include("../page/left_menu.php");?></td>
    <td width="761" align="center" valign="top" bgcolor="#FFFFFF">
    	<table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
      <?php
		 $jdcz=$_POST[jdcz];
		 $name=$_POST[name];

		if($jdcz!=""){
	     $sql=mysql_query("select * from tb_book where title like '%".$name."%' order by addtime desc",$conn);
		}
		 $info=mysql_fetch_array($sql);
		 if($info==false){
		   echo "<script language='javascript'>alert('本站暂无类似产品!');history.go(-1);</script>";
		  }
		 else{
	?>
      <table width="730" border="0" border-collapse="collapse" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
        <tr bgcolor="#FFFFFF">
          <td width="92" height="25"><div align="center" style="color: #990000">名称</div></td>
          <td width="83"><div align="center" style="color: #990000">作者</div></td>
          <td width="62"><div align="center" style="color: #990000">市场价</div></td>
          <td width="62"><div align="center" style="color: #990000">会员价</div></td>
          <td width="161"><div align="center" style="color: #990000">上市时间</div></td>
          <td width="42" colspan="2"><div align="center" style="color: #990000">操作</div></td>
        </tr>
        <?php
		 do{
		?>
        <tr bgcolor="#FFFFFF">
          <td height="25"><div align="center"><?php echo $info[title];?></div></td>
          <td height="25"><div align="center"><?php echo $info[anthor];?></div></td>
          <td height="25"><div align="center"><?php echo $info[shichangjia];?></div></td>
          <td height="25"><div align="center"><?php echo $info[huiyuanjia];?></div></td>
          <td height="25"><div align="center"><?php echo $info[addtime];?></div></td>
          <td height="25"><div align="center"><a href="../page/lookinfo.php?id=<?php echo $info[id];?>">查看</a></div></td>
          <td height="25"><div align="center"><a href="../page/addgouwuche.php?id=<?php echo $info[id];?>">购物</a></div></td>
        </tr>
             <tr bgcolor="#FFFFFF" >
                 <td height="25" colspan="7" border=0px><div align="center" ><a href="../index.php" style="width: 20px;">返回</a></div></td>
             </tr>
        <?php
		   }while($info=mysql_fetch_array($sql));
		 }
		?>
    </table>


</table>
</div>
<?php
include("bottom.php");
?>
