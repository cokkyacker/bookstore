
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<script language="javascript">
  function openspgl(){
    if(document.all.spgl.style.display=="none"){
	   document.all.spgl.style.display="";
	   document.all.d1.src="images/point3.gif";
	 }
	 else{
	  document.all.spgl.style.display="none";
	  document.all.d1.src="images/point1.gif";
	 }  
  }
  function openyhgl(){
    if(document.all.yhgl.style.display=="none"){
	   document.all.yhgl.style.display="";
	   document.all.d2.src="images/point3.gif";
	 }
	 else{
	  document.all.yhgl.style.display="none";
	  document.all.d2.src="images/point1.gif";
	 }  
  }
  function openddgl(){
    if(document.all.ddgl.style.display=="none"){
	   document.all.ddgl.style.display="";
	   document.all.d3.src="images/point3.gif";
	 }
	 else{
	  document.all.ddgl.style.display="none";
	  document.all.d3.src="images/point1.gif";
	 }  
  }
  function opengggl(){
    if(document.all.gggl.style.display=="none"){
	   document.all.gggl.style.display="";
	   document.all.d4.src="images/point3.gif";
	 }
	 else{
	  document.all.gggl.style.display="none";
	  document.all.d4.src="images/point1.gif";
	 }  
  }
</script>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="212" border="0" cellpadding="0" cellspacing="0" background="left_bg.png">
  <tr>
    <td height="425" valign="top" background="images/left_bg.png">
    	<div align="center">
      <table width="212" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="212" height="20" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="212" height="32" background="images/default_09.png" onClick="javascript:openspgl()"><div align="center"><a href="#"><img id="d1" border="0"src="images/point1.gif" width="10" height="10">&nbsp;&nbsp; 商品管理</a></div></td>
            </tr>
          </table>
            <table width="212" border="0" cellpadding="0" cellspacing="0" id="spgl" style="display:">
              <tr>
                <td height="22" background="images/default_10.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="t1" href="addbook.php" target="main">增加商品</a></td>
              </tr>
              <tr>
                <td height="22" background="images/default_10.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="editbook.php" target="main" class="t1">修改商品</a></td>
              </tr>
                <tr>
                  <td height="22" background="images/default_10.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="showleibie.php" target="main" class="t1">类别管理</a></td>
                </tr>
                <tr>
                  <td height="22" background="images/default_10.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="addleibie.php" target="main" class="t1">添加类别</a></td>
                </tr>
              </table>
              <table width="212" height="20" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="32" background="images/default_09.png" onClick="javascript:openyhgl()"><div align="center"><a href="#"><img id="d2" border="0"src="images/point1.gif" width="10" height="10"> &nbsp;&nbsp;用户管理</a></div></td>
                </tr>
              </table>
              <table width="212" border="0" cellpadding="0" cellspacing="0" id="yhgl" style="display:">
                <tr>
                  <td height="22" background="images/default_10.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="edituser.php" target="main" class="t1">会员管理</a></td>
                </tr>
                <tr>
                  <td height="22" background="images/default_10.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="lookleaveword.php"  target="main" class="t1">留言管理</a></td>
                </tr>
              </table>
              <table width="212" height="20" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="32" align="center" background="images/default_09.png" onClick="javascript:openddgl()"><a href="#"><img id="d3" border="0"src="images/point1.gif" width="10" height="10">&nbsp;&nbsp;&nbsp;订单管理</a></td>
                </tr>
              </table>
              <table width="212" border="0" cellpadding="0" cellspacing="0" id="ddgl" style="display:">
                <tr>
                  <td height="22" background="images/default_10.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="lookdd.php" target="main" class="t1">编辑订单</a></td>
                </tr>
                <tr>
                  <td height="26" background="images/default_10.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="finddd.php" target="main" class="t1">查询订单</a></td>
                </tr>
              </table>

              <table width="212" height="20" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="32" align="center" background="images/default_09.png" onClick="javascript:openddgl()"><a href="#"><img id="d3" border="0"src="images/point1.gif" width="10" height="10">&nbsp; &nbsp;书库管理</a></td>
                </tr>
              </table>
              <table width="212" border="0" cellpadding="0" cellspacing="0" id="ddgl" style="display:">
                <tr>
                  <td height="22" background="images/default_10.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="number.php" target="main" class="t1">库存管理</a></td>
                </tr>
                </table>


              <table width="212" height="20" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="32" background="images/default_09.png" onClick="javascript:opengggl()"><div align="center"><a href="#"><img id="d4" border="0"src="images/point1.gif" width="10" height="10">&nbsp; &nbsp;信息管理</a></div></td>
                </tr>
              </table>
              <table width="212" border="0" cellpadding="0" cellspacing="0" id="gggl" style="display:">
                <tr>
                  <td height="22" background="images/default_10.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admingonggao.php " target="main" class="t1">管理公告</a></td>
                </tr>
                <tr background="images/default_10.png">
                  <td height="22" background="images/default_10.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="addgonggao.php " target="main" class="t1">发布公告</a></td>
                </tr>
                <tr>
                  <td height="26" background="images/default_10.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="editpinglun.php " target="main" class="t1">管理评价</a></td>
                </tr>
              </table>
			</td>
        </tr>
      </table>
      </div></td>
  </tr>
</table>
</body>
</html>
