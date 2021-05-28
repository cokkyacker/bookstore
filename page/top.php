<?php error_reporting(0); ?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>网上书店</title>
<link rel="stylesheet" type="text/css" href="../css/font.css">
</head>
<body>
	<div style="max-width:950px;margin:0 auto">
    <table width="966" height="300" border="0" align="center" cellpadding="0" cellspacing="0" background="../img/top.png">
  <tr></tr>
  <tr>
    <td width="648" height="36" style="font-size: 14px;" bgcolor="#366389">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	<a href="../index.php">首页</a>&nbsp;|
    	<a href="../page/shownewpr.php">最新书籍</a> |
        <a href="../page/showtuijian.php">推荐书籍</a>&nbsp;|&nbsp;
    	<a href="../page/showtejia.php">特价书籍</a>&nbsp;|&nbsp;
    	<a href="../page/showfenlei.php">书籍分类</a>&nbsp;|&nbsp;
    	<a href="../page/gouwuche.php">购物车</a>&nbsp;|&nbsp;
        <a href="../page/usercenter.php">用户中心</a> |
        <a href="../page/lookuserleaveword.php">留言板</a>|
        <a href="../page/userleaveword.php">我要留言</a>
    </td>
    <td width="110" align="center" bgcolor="#366389" style="font-size: 12px;" >
      <?php
      session_start();
      if($_SESSION[username]!=""){
	    echo "欢迎&nbsp$_SESSION[username]&nbsp来到网上书城";
	  }
	?>
    </td>
    <td width="80" align="center" bgcolor="#366389" style="font-size: 12px;" >
	<?php
	if($_SESSION[username]!=""){
	    echo "<a href='../page/logout.php'>退出当前账号</a>";
	  }
	?>
    </td>
  </tr>
</table>	
</div>
