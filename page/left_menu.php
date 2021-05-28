<?php error_reporting(0); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php include("../page/Conn/conn.php");?>
	<link rel="stylesheet" href="../css/index.css" />
<style type="text/css">
.dd {
	text-align: center;
}
.div1{
	float: left;
	margin-left:10px ;
	font-size: 14px;
}
.bg2 {
    background: url("../img/tel22.png");
    background-size: 100%;
    background-repeat: no-repeat;
}

</style>
<table width="200" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="153" >
          	
          	<table width="100" border="0" cellspacing="0" cellpadding="0">
            <tr bgcolor="#9999FF">
            	<td height="20"><img src="../img/login.png" height="20"></td>
              	<td height="20"  colspan="3">　登录注册：</td>
            </tr>
            <tr>
              <td width="15"></td>
              <td width="177">
              	<table width="180" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td valign="top">
                  	<table width="100%" height="100" border="0" align="center" cellpadding="0" cellspacing="1">
                      <tr>
                        <td>
                        	<table width="180" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td>
                              	<table width="180" border="0" cellpadding="0" cellspacing="0">
                           <script language="javascript">
							 function chkuserinput(form){
							   if(form.username.value==""){
								  alert("请输入用户名!");
								  form.username.select();
								  return(false);
								}		
								if(form.userpwd.value==""){
								  alert("请输入用户密码!");
								  form.userpwd.select();
								  return(false);
								}	
								if(form.yz.value==""){
								  alert("请输入验证码!");
								  form.yz.select();
								  return(false);
								}	
							   return(true);				 
							 }
						  </script>
                                  <script language="javascript">
						    function openfindpwd(){
							window.open("../page/openfindpwd.php","newframe","left=200,top=200,width=400,height=200,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");
							   }
						</script>
                                    <form name="form2" method="post" action="../page/chkuser.php"
                                          onSubmit="return chkuserinput(this)">
                                        <tr>
                                            <td height="10" colspan="3">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="55" height="20">
                                                <div align="right">用户名：</div>
                                            </td>
                                            <td height="20" colspan="2">
                                                <div align="left">
                                                    <input type="text" name="username" size="19" class="inputcss"
                                                           style="background-color:#e8f4ff "
                                                           onMouseOver="this.style.backgroundColor='#ffffff'"
                                                           onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="20">
                                                <div align="right">密&nbsp;&nbsp;&nbsp;&nbsp;码：</div>
                                            </td>
                                            <td colspan="2">
                                                <div align="left">
                                                    <input type="password" name="userpwd" size="19" class="inputcss"
                                                           style="background-color:#e8f4ff "
                                                           onMouseOver="this.style.backgroundColor='#ffffff'"
                                                           onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="20">
                                                <div align="right">验证码：</div>
                                            </td>
                                            <td width="66" height="20">
                                                <div align="left">
                                                    <input type="text" name="yz" size="10" class="inputcss"
                                                           style="background-color:#e8f4ff "
                                                           onMouseOver="this.style.backgroundColor='#ffffff'"
                                                           onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                                </div>
                                            </td>
                                            <td width="64">
                                                <div align="left"> &nbsp;
                                                    <?php
                                                    $num = intval(mt_rand(1000, 9999));//生成验证码
                                                    for ($i = 0; $i < 4; $i++) {
                                                        echo "<img src=../img/images/code/" . substr(strval($num), $i, 1) . ".gif>";
                                                    }
                                                    ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="20" colspan="3">
                                                <div align="right">
                                                    <input type="hidden" value="<?php echo $num; ?>" name="num">
                                                    <input name="submittj" type="submit" class="buttoncss" value="登录">
                                                    <input type="reset" class="buttoncss" value="重置"/>
                                                    <a style="text-decoration:none; color: red;" href="../page/agreereg.php">我要注册</a></div></td>
                                            </td>
                                        </tr>
                                    </form>
                              </table></td>
                            </tr>
                        </table></td>
                      </tr>
                  </table></td>
                </tr>
              </table></td>
              <td width="17">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="20" bgcolor="#9999FF">
          	<img class="imga" src="../img/gonggao.png" height="20">&nbsp;&nbsp;
          		<span class="bf">书城公告：</span>
          		<a href="../page/gonggaolist.php" style="text-decoration:none;float: right;">更多&gt;</a>
          </td>
        </tr>
        <tr>
          <td height="40" >
          	<table width="200"  border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td>
              	<table width="200"  border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                  	<td width="15">&nbsp;</td>
                    <td height="5"></td>
                  </tr>
                  <?php
                  include("../page/Conn/conn.php");
								 $sql=mysql_query("select * from tb_gonggao order by time desc limit 0,5",$conn);
								 $info=mysql_fetch_array($sql);
								 if($info==false){
				  ?>
                  <tr>
                    <td height="20" align="center">暂无新闻公告!</td>
                  </tr>
                  <?php
								 }
								 else{
								   do{
				  ?>
                  <tr>
                    <td height="20"><div align="center">
                      <table width="200"  border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="16" height="5">
                          	<div align="center">
                          		<img src="../img/images/circle.gif" width="11" height="12"></div></td>
                          <td width="164" height="24">
                          	<div align="left"> 
                          		<a href="../page/gonggao.php?id=<?php echo $info[id];?>">
                              <?php 
								 echo substr($info[title],0,24);
								  if(strlen($info[title])>24){
									echo "...";
								  } 
							   ?>
                          </a> </div></td>
                        </tr>
                      </table> 
                      </div></td>
                  </tr>
                  <?php
									 }
								   while($info=mysql_fetch_array($sql));
								 }
								?>
              </table>
          </td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="20"></td>
        </tr>
        <tr>
          <form name="form" method="post" action="../page/serchorder.php">
                <tr class="bg2">
                  <td width="500" height="110" valign="middle" >
                  <div align="left">&nbsp;<span><img class="imga" src="../img/sousuo.png" height="20px"> </span><span class="bf">&nbsp;&nbsp;搜索：(请输入书籍名称)<br /></span>
          <span style="font-size: 16px;">&nbsp;serch:&nbsp;</span> <input type="text" name="name" size="12" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span class="dd"></span>
                          <input type="hidden" name="jdcz" value="jdcz">
                          <input name="submit" type="submit" class="buttoncss" value="搜索">
</div></td>
                </tr>
              </form>
        </tr>
    <tr bgcolor="#FFFFFF">
        <td height="20"></td>
    </tr>
        <tr class="bg2" height="110" >
        	<td>

        		<div class="div1" >
        			<img src="../img/dh.png" width="40" height="40" height="20px" />
        		</div>
        		<div >
        			客服热线：<br>022-24392012<br>
        		</div>
            </td>

        </tr>
      </table>
