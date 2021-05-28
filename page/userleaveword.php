<?php error_reporting(0); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
<div style="max-width:950px;margin:0 auto">
    <body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar" bgcolor="#ADD8E6">

    <table width="966" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="109" height="438" valign="top" bgcolor="#FFFFFF">
    	<div align="center">
      <?php include("../page/left_menu.php");?>
    </div></td>
    <td width="761" align="center" valign="top" bgcolor="#FFFFFF">
    	<table width="" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td></td>
      </tr>
    </table>
      <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="20" bgcolor="#FFFFFF"><div align="center" style="color: #000000">用户留言</div></td>
        </tr>
        <tr>
          <td height="150" bgcolor="#555555">
          	<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
              <script language="javascript">
			  function chkinput1(form)
			  {
			    if(form.title.value=="")
				{
				   alert("请输入留言主题!");
				   form.title.select();
				   return(false);
				}
			   if(form.content.value=="")
				{
				   alert("请输入留言内容!");
				   form.content.select();
				   return(false);
				}
				return(true);
			  }
			
			</script>
              <form name="form2" method="post" action="../page/saveuserleaveword.php" onSubmit="return chkinput1(this)">
                <tr>
                  <td width="102" height="25" bgcolor="#FFFFFF"><div align="center">留言主题：</div></td>
                  <td width="395" bgcolor="#FFFFFF"><div align="left">
                      <input onkeyup="this.value=this.value.replace(/^ +| +$/g,'')" type="text" name="title" size="30" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                  </div></td>
                </tr>
                <tr>
                  <td height="100" bgcolor="#FFFFFF"><div align="center">留言内容：</div></td>
                  <td height="100" bgcolor="#FFFFFF"><div align="left">
                      <textarea onkeyup="this.value=this.value.replace(/^ +| +$/g,'')" name="content" rows="8" cols="60" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></textarea>
                  </div></td>
                </tr>
                <tr>
                  <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="left">
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;是否公开：
                              <input type="radio" name="isopen" value="1" id="yes" />
                              <!--把汉字与单选按钮连接上，单击汉字形同于单击单选按钮-->
                              <label for="yes">是</label>
                              &nbsp;
                              <input type="radio" name="isopen" value="0"  />否&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                      <input name="submit2" type="submit" class="buttoncss" value="提交">
&nbsp;&nbsp;
                <input name="reset" type="reset" class="buttoncss" value="重置">
                  </div></td>
                </tr>
              </form>
          </table></td>
        </tr>
      </table></td>
  </tr><?php
        include("bottom.php");
        ?>
</table>
    </body>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</div>
