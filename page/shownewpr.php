<?php error_reporting(0); ?>
<?php
session_start();
 include("../page/top.php");
?>
<link rel="stylesheet" href="../css/index.css" />
<div style="max-width:950px;margin:0 auto">
    <body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar" bgcolor="#ADD8E6">

    <table width="966" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="209" height="438" valign="top" bgcolor="#FFFFFF">
    	<?php include("../page/left_menu.php");?>
    </td>
    <td width="757" align="center" valign="top" bgcolor="#FFFFFF">
    	<table width="750" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
	      <tr>
	        <td height="50">&nbsp;<img class="imga" src="../img/sp3.png" width="22" height="22">&nbsp;<span class="fb">最新书籍：</span></td>
	      </tr>
    	</table>
      <table width="750" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td background="../img/images/line1.gif"></td>
        </tr>
      </table>
      <table width="750" height="70" border="0" align="center" cellpadding="0" cellspacing="0">
        <?php
	     $sql=mysql_query("select * from tb_book order by addtime desc limit 0,4",$conn); 
		 $info=mysql_fetch_array($sql);
		 if($info==false){
		   echo "本站暂无最新产品!";
		  } 
		 else{ 
		    do{ 
	   ?>
        <tr>
          <td width="130"  rowspan="6">
          	<div align="center">
	              <?php
				 if($info[tupian]==""){
				   echo "暂无图片!";
				 }
				 else{
				?>
	              <a href="../page/lookinfo.php?id=<?php echo $info[id];?>">
	              	<img border="0" src="<?php echo $info[tupian];?>" width="120" height="120">
	              </a>
	              <?php
				 }
				?>
          	</div>
         </td>
          <td width="200px" height="15">
          	<div align="center" style="color: #000000; width:60px ;">书籍名称：</div>
          </td>
          <td colspan="5">
          	<div align="left">
          		<a href="../page/lookinfo.php?id=<?php echo $info[id];?>">
          			<?php echo $info[title];?>
          		</a>
          	</div>
          </td>
        </tr>
        <tr>
          <td width="120" height="20"><div align="center" style="color: #000000">出版社：</div></td>
          <td width="120" height="20"><div align="left"><?php echo $info[publish];?></div></td>
          <td width="62"><div align="center" style="color: #000000">作者：</div></td>
          <td colspan="3"><div align="left"><?php echo $info[anthor];?></div></td>
        </tr>
        <tr>
          <td width="120" height="20"><div align="center" style="color: #000000">书籍简介：</div></td>
          <td height="20" colspan="5"><div align="left"><?php echo $info[jianjie];?></div></td>
        </tr>
        <tr>
          <td width="120"  height="20"><div align="center" style="color: #000000">上市日期：</div></td>
          <td height="20"><div align="left"><?php echo $info[addtime];?></div></td>
          <td width="120" height="20"><div align="center" style="color: #000000">剩余数量：</div></td>
          <td width="120" height="20"><div align="left"><?php echo $info[shuliang];?></div></td>
          <td width="120"><div align="center" style="color: #000000">装订：</div></td>
          <td width="73"><div align="left"><?php echo $info[bind];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">商场价：</div></td>
          <td height="20"><div align="left"><?php echo $info[shichangjia];?>元</div></td>
          <td height="20"><div align="center" style="color: #000000">会员价：</div></td>
          <td height="20"><div align="left"><?php echo $info[huiyuanjia];?>元</div></td>
          <td height="20"><div align="center" style="color: #000000">折扣：</div></td>
          <td height="20"><div align="left"><?php echo (@ceil(100-($info[huiyuanjia]/$info[shichangjia])*100))."%";?></div></td>
        </tr>
        <tr>
          <td height="20" colspan="6" width="461"><div align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="../page/addgouwuche.php?id=<?php echo $info[id];?>"><img src="../img/images/b1.gif" width="50" height="15" border="0" style=" cursor:hand"></a></div></td>
        </tr>
        <tr>
          <td height="10" colspan="7" background="../img/images/line1.gif"></td>
        </tr>
        <?php
	    	}while($info=mysql_fetch_array($sql));
		 }
		?>
      </table></td>
  </tr>
</table>
</div>
</body>
<?php
include("bottom.php");
?>