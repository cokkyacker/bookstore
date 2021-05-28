<?php error_reporting(0); ?>
<?php
 include("../page/top.php");
?>
<div style="max-width:950px;margin:0 auto">
    <body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar" bgcolor="#ADD8E6">

    <table width="966" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="109" height="438" valign="top" bgcolor="#FFFFFF">
    	<?php include("../page/left_menu.php");?>
    </td>
    <td width="781" align="center" valign="top" bgcolor="#FFFFFF">
    	<table width="757" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="757" height="46" background="../img/images/gg.gif">
          	<div align="center" style="color: #FFFFFF"></div>
          </td>
        </tr>
        <tr>
          <td height="150">
          	<table width="730"  border="0" align="center" cellpadding="0" cellspacing="1">
              <?php
		     
		     $id=$_GET[id];
			 $sql=mysql_query("select * from tb_gonggao where id='".$id."'",$conn);
			 $info=mysql_fetch_array($sql);
		     include("../page/function.php");
		   
		   ?>
              <tr>
                <td width="24" height="25" bgcolor="#FFFFFF"><div align="center"></div></td>
                <td width="315" bgcolor="#FFFFFF"><div align="center">公告主题：<?php echo unhtml($info[title]);?></div></td>
                <td width="66" bgcolor="#FFFFFF"><div align="center">发布时间：</div></td>
                <td width="120" bgcolor="#FFFFFF"><div align="left"><?php echo $info[time];?></div></td>
              </tr>
              <tr>
                <td height="125" bgcolor="#FFFFFF"><div align="center"></div></td>
                <td height="125" colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo unhtml($info[content]);?></div></td>
              </tr>
          </table></td>
        </tr>
      </table>
      <table width="730" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="right"><a href="../page/gonggaolist.php">继续查看</a></div></td>
        </tr>
      </table></td>
  </tr>
</table>
</div>
<?php
include("bottom.php");
?>