<?php error_reporting(0); ?>
<html>
<head>
<title>查看留言</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<?php
include("conn/conn.php");
$id=$_GET[id];
$sql=mysql_query("select * from tb_leaveword where id='".$id."'",$conn);
$info=mysql_fetch_array($sql);

?>
<body topmargin="0" leftmargin="0" bottommargin="0" >


<p>&nbsp;</p>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr >
    <td height="25"  bgcolor="#FFFFFF" COLSPAN="4" ALIGN="CENTER"><div align="center"><font color="#000000">留言详细</font></div></td>
  </tr>
        <tr> 
          <td width="87" height="25" bgcolor="#FFFFFF"><div align="center">留言主题:</div></td>
          <td width="392" height="25" bgcolor="#FFFFFF"><div align="left"><?php echo $info[title];?></div></td>
          <td width="83" bgcolor="#FFFFFF"><div align="center">留言时间:</div></td>
          <td width="183" bgcolor="#FFFFFF"><div align="center"><?php echo $info[time];?></div></td>
        </tr>
        <tr> 
          <td height="100" bgcolor="#FFFFFF"><div align="center">留言内容:</div></td>
          <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info[content];?></div></td>
        </tr>
      </td>
  </tr>
  <tr>
      <td height="20"><div align="center">&nbsp;<a href="lookleaveword.php"><input type="button" align="center" value="返回" class="buttoncss"></a></div></td>
      <td colspan="2"><div align="center">
              <?php
             // if($info[isOpen]!="0"){
              ?>
              <a href="passleaveword.php?id=<?php echo $info[id]; ?>">
                  <input type="button" value="通过" class="buttoncss">
              </a></div>
          <?php
         // }
      ?>
      </td>
      <td height="20"><div align="center">
              <a href="replyleaveword.php?id=<?php echo $info[id];?>">
                  <input type="button" value="回复" class="buttoncss">
              </a></div></td>
  </tr>
</table>
</body>
</html>
