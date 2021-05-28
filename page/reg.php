<?php error_reporting(0); ?>
<?php
 include("../page/top.php");
?>
<script language="javascript">
    function chknc()
    {
        nc = form1.usernc.value;
        window.location.href="chknc.php?nc="+form1.usernc.value;

   //     alert(nc);
        <?php
 /*       $nc=trim($_GET[nc]);
        include("conn/conn.php");
        if($nc=="")
        {
            echo "<script>alert('请输入昵称!');history.back()";

        }
        else
        {
            $sql=mysql_query("select * from tb_user where name='".$nc."'",$conn);
            $info=mysql_fetch_array($sql);
            if($info==true)
            {
                echo "<script>alert('对不起,该昵称已被占用!');history.back()";
            }
            else
            {
                echo "<script>alert('恭喜,该昵称未被占用!');history.back()";
            }
        }*/
        ?>
    }
  function chkinput(form)
  {
    if(form.usernc.value=="")
	{
	 alert("请输入昵称!");
	 form.usernc.select();
	 return(false);
	}
	if(form.usernc.value.length>18)
	{
	 alert("昵称长度超过十八位!");
	 form.usernc.select();
	 return(false);
	}
	if(form.p1.value=="")
	{
	 alert("请输入注册密码!");
	 form.p1.select();
	 return(false);
	}
    if(form.p2.value=="")
	{
	 alert("请输入确认密码!");
	 form.p2.select();
	 return(false);
	 }	
	if(form.p1.value.length<6)
	 {
	 alert("注册密码长度应大于6!");
	 form.p1.select();
	 return(false);
	 }	
	 if(form.p1.value.length>18)
	 {
	 alert("注册密码长度应小18!");
	 form.p1.select();
	 return(false);
	 }	
	if(form.p1.value!=form.p2.value)
	 {
	 alert("密码与确认密码不同!");
	 form.p1.select();
	 return(false);
	 }
		
	if(form.yb.value==""){
		alert("请输入收货人邮编!");
		 form.yb.select();
		return(false);
	}
	if(form.yb.value.length!=6){
		alert("请正确输入收货人邮编!");
		 form.yb.select();
		return(false);
	}
	if(/^[0-9]+$/.test(form.yb.value)){
		
			    }else{
					alert('请输入正确的收货人邮编');
					form.yb.select();
				 	return(false);
			     }
	
   if(form.tel.value=="")
	{
	 alert("请输入联系电话!");
	 form.tel.select();
	 return(false);
	 }
	 if(form.tel.value.length!=11){
	 	alert("请输入正确的电话号码!");
	 	form.tel.select();
		return(false);
	 }
	 if(!/^(((13[0-9]{1})|(14[0-9]{1})|(17[0-9]{1})|(15[0-3]{1})|(15[4-9]{1})|(18[0-9]{1})|(199))+\d{8})$/.test(form.tel.value)){
		alert('请输入正确的电话号码');
		form.tel.select();
		return(false);
    }
	 
  if(form.truename.value=="")
	{
	 alert("请输入真实姓名!");
	 form.truename.select();
	 return(false);
	 }
  if(form.sfzh.value=="")
	{
	 alert("请输入身份证号!");
	 form.sfzh.select();
	 return(false);
	 }
	if(form.sfzh.value.length!=18){
	 	alert("请输入正确位数的身份证号!");
	 	form.sfzh.select();
		return(false);
	 }
	 
	if(/^[0-9]+$/.test(form.sfzh.value)){
		
	}else{
		alert('请输入正确格式的身份证号');
		form.sfzh.select();
		return(false);
		}
  if(form.dizhi.value=="")
	{
	 alert("请输入家庭住址!");
	 form.dizhi.select();
	 return(false);
	 }
   return(true);
  }
</script>
<div style="max-width:950px;margin:0 auto">
<table width="966" height="350" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="129" height="350" align="center" valign="top" bgcolor="#FFFFFF">
    	<?php include("../page/left_menu.php");?>
   
    	</td>
    <td width="761" align="center" valign="top" bgcolor="#FFFFFF"><table width="557"  height="15" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="500"><table width="557" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="557" height="46" ><div align="center" style="color: #FFFFFF"></div></td>
            </tr>
            <tr>
              <td  bgcolor="#555555"><table width="557" border="0" align="center" cellpadding="0" cellspacing="0">
                  <form name="form1" method="post" action="../page/savereg.php" onSubmit="return chkinput(this)">
                    <tr>
                      <td width="100" height="20" bgcolor="#FFFFFF"><div align="center">用户昵称：</div></td>
                      <td width="397" bgcolor="#FFFFFF"><div align="left">
                          <input onkeyup="this.value=this.value.replace(/^ +| +$/g,'')" type="text" name="usernc" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*(注册后不可修改)</span>&nbsp;
                              <input name="button2" type="button" class="buttoncss" value="查看昵称是否已用" onclick="chknc()">
                      </div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">注册密码：</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="password" onkeyup="this.value=this.value.replace(/^ +| +$/g,'')" name="p1" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*</span></div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">确认密码：</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="password" onkeyup="this.value=this.value.replace(/^ +| +$/g,'')" name="p2" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*</span></div></td>
                    </tr>
                      <tr>
                          <td height="20" bgcolor="#FFFFFF"><div align="center">邮政编码：</div></td>
                          <td height="20" bgcolor="#FFFFFF"><div align="left">
                                  <input onkeyup="this.value=this.value.replace(/^ +| +$/g,'')" type="text" name="yb" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                              </div></td>
                      </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">联系电话：</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input onkeyup="this.value=this.value.replace(/^ +| +$/g,'')" type="text" name="tel" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*(手机号)</span></div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">真实姓名：</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input onkeyup="this.value=this.value.replace(/^ +| +$/g,'')" type="text" name="truename" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*(注册后不可修改)</span> </div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">身份证号：</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input onkeyup="this.value=this.value.replace(/^ +| +$/g,'')" type="text" name="sfzh" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*</span></div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">家庭住址：</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input onkeyup="this.value=this.value.replace(/^ +| +$/g,'')" type="text" name="dizhi" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*</span></div></td>
                    </tr>

                    <tr>
                      <td height="20" colspan="2" bgcolor="#FFFFFF"><div align="center">
                          <input name="submit2" type="submit" class="buttoncss" value="提交">
&nbsp;&nbsp;
                      <input name="reset" type="reset" class="buttoncss" value="重写">
                      </div></td>
                    </tr>
                  </form>
              </table></td>
            </tr>
          </table>
            <table width="557" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="547"><div align="center" style="color: #FF0000">注意：带*为必添内容!</div></td>
              </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php
include("bottom.php");
?>