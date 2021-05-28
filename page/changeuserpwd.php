<?php error_reporting(0); ?>
<?php
 include("../page/top.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
            <td><div align="left">&nbsp;&nbsp;当前用户&nbsp;<span style="color: #0000FF">:&nbsp</span><?php echo $_SESSION[username];?><span style="color: #0000FF">&nbsp;|&nbsp;</span><a href="../page/usercenter.php">修改个人信息</a>&nbsp;<span style="color: #0000FF">|&nbsp;</span><a href="../page/changeuserpwd.php">修改密码</a>&nbsp;<span style="color: #0000FF">|&nbsp;</span><a href="../page/lookmyleaveword.php">我的留言</a>&nbsp;<span style="color: #0000FF">|&nbsp;</span><a href="../page/logout.php">注销离开</a></div></td>

        </tr>
      </table>
      <table width="700" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>
      <table width="450" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="20" bgcolor="#FFFFFF">
          	<div align="center" style="color: #760602">修改用户密码</div></td>
        </tr>
        <tr>
          <td height="80" bgcolor="#FFEDBF">
          	<table width="450" height="80" border="0" align="center" cellpadding="0" cellspacing="1">
              <script language="javascript">
		  function chkinput1(form)
			  {
			    if(form.p1.value=="")
				{
				  alert("请输入原密码!");
				  form.p1.select();
				  return(false);
				}
				if(form.p2.value=="")
				{
				  alert("请输新密码!");
				  form.p2.select();
				  return(false);
				}      
			   if(form.p3.value=="")
				{
				  alert("请输确认密码!");
				  form.p3.select();
				  return(false);
				} 
				if(form.p2.value!=form.p3.value)
				{
				  alert("密码与确认密码不同!");
				  form.p2.select();
				  return(false);
				}
				if(form.p2.value.length<6)
				{
				  alert("新密码长度应大于6!");
				  form.p2.select();
				  return(false);
				}
				return(true);
			  }
		  </script>
              <form name="form1" method="post" action="../page/savechangeuserpwd.php" onSubmit="return chkinput1(this)">
                <tr>
                  <td width="77" height="20" bgcolor="#FFFFFF"><div align="center">原密码：</div></td>
                  <td width="200" bgcolor="#FFFFFF">
                  	<div align="left">
                      <input type="password" name="p1" size="20" class="inputcss">
                  	</div>
                  </td>
                </tr>
                <tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">新密码：</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left">
                      <input type="password" name="p2" size="20" class="inputcss">
                  </div></td>
                </tr>
                <tr>
                  <td height="20" bgcolor="#FFFFFF"><div align="center">确认新密码：</div></td>
                  <td height="20" bgcolor="#FFFFFF"><div align="left">
                      <input type="password" name="p3" size="20" class="inputcss">
                  </div></td>
                </tr>
                <tr>
                  <td height="20" colspan="2" bgcolor="#FFFFFF"><div align="center">
                      <input name="submit2" type="submit" class="buttoncss" value="更改">
                  </div></td>
                </tr>
              </form>
          </table></td>
        </tr>
      </table></td>
  </tr>
            <?php
            include("bottom.php");
            ?>
</table>

        </body>
</div>