<?php error_reporting(0); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<div style="max-width:950px;margin:0 auto">
    <body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar" bgcolor="#ADD8E6">

<?php
 session_start();
 if($_SESSION[username]=="")
 {
   echo "<script>alert('您还没有登录,请先登录!');history.back();</script>";
   exit;
  }
?>
<?php
 include("../page/top.php");
?>
<!DOCTYPE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table width="966" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="109" height="438" valign="top" bgcolor="#FFFFFF">
    	<?php include("../page/left_menu.php");?>
    </td>
    <td width="737" align="center" valign="top" bgcolor="#FFFFFF">
    	<table width="700" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td></td>
      </tr>
    </table>
      <table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td><div align="left">&nbsp;&nbsp;当前用户&nbsp;<span style="color: #0000FF">:&nbsp</span><?php echo $_SESSION[username];?><span style="color: #0000FF">&nbsp;|&nbsp;</span><a href="../page/usercenter.php">修改个人信息</a>&nbsp;<span style="color: #0000FF">|&nbsp;</span><a href="../page/changeuserpwd.php">修改密码</a>&nbsp;<span style="color: #0000FF">|&nbsp;</span><a href="../page/lookmyleaveword.php">我的留言</a>&nbsp;<span style="color: #0000FF">|&nbsp;</span><a href="../page/logout.php">注销离开</a></div></td>
        </tr>
      </table>
      <table width="700" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>
      <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="20" bgcolor="#FFFFFF"><div align="center" style="color: #660206"><?php echo $_SESSION[username];?>的所有信息</div></td>
        </tr>
        <tr>
          <td align="center" height="160" bgcolor="#FFFFFF"><table width="500" height="160" border="0" align="center" cellpadding="0" cellspacing="0"  bgcolor="#FFEDBF">
              <script language="javascript">
		     function chkinput1(form)
			  {
				if(form.truename.value=="")
				{
				  alert("真实姓名不能为空!");
				  form.truename.select();
				  return(false);
				}
				if(form.sfzh.value=="")
				{
				  alert("身份证号不能为空!");
				  form.sfzh.select();
				  return(false);
				}
				if(form.tel.value=="")
				{
				  alert("联系电话不能为空!");
				  form.tel.select();
				  return(false);
				} 
				if(form.dizhi.value=="")
				{
				  alert("联系地址不能为空!");
				  form.dizhi.select();
				  return(false);
				}         
			   
				return(true);
			  }
		   </script>
              <form name="form1" style="text-align: center;" method="post" action="../page/changeuser.php" onsubmit="return chkinput1(this)">
                <?php
		   $sql=mysql_query("select * from tb_user where name='".$_SESSION[username]."'",$conn);
		   $info=mysql_fetch_array($sql);
		  
		  ?>
                <tr>
                  <td width="100" height="20" bgcolor="#FFFFFF"><div align="center">昵称：</div></td>
                  <td width="397" bgcolor="#FFFFFF"><div align="left"><?php echo $_SESSION[username];?></div></td>
                </tr>
                <tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">真实姓名：</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left"><?php echo $info[truename];?></div></td>
                </tr>
                <tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">联系电话：</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="tel" size="25" class="inputcssnull" value="<?php echo $info[tel];?>">
                  </div></td>
                </tr>
                <tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">家庭住址：</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="dizhi" size="25" class="inputcssnull" value="<?php echo $info[dizhi];?>">
                  </div></td>
                </tr>
                <tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">邮政编码：</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="youbian" size="25" class="inputcssnull" value="<?php echo $info[youbian];?>">
                  </div></td>
                </tr>
                <tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">身份证号：</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left"><?php echo $info[sfzh];?></div></td>
                </tr>
                <tr>
                  <td height="20" colspan="2" bgcolor="#FFFFFF"><div align="center">
                      <input name="submit2" type="submit" class="buttoncss" value="更改">
&nbsp;&nbsp;
                <input name="reset" type="reset" class="buttoncss" value="取消更改">
                  </div></td>
                </tr>
              </form>
          </table></td>
        </tr>
      </table>
      <table width="700" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="center" style="color: #0000FF">蓝色字体为可修改项</div></td>
        </tr>
      </table></td>
  </tr>
</table>
</div>
<?php
include("bottom.php");
?>