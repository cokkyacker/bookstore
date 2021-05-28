<?php error_reporting(0); ?>
<html>
	<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <?php
        session_start();
        if($_SESSION[name]=="")
        {
            echo "<script>alert('您还没有登录,请先登录!');window.location.href='login.php';</script>";
            exit;
        }
        ?>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar" bgcolor="#FFFFCC">
<table width="1003" align="center" cellpadding="1" cellspacing="0" bordercolor="#FFFFCC" bgcolor="#FFFFCC">
  <tr>
    <td><table width="1003" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="56" bgcolor="#FFFFFF">
        	<div align="center">
            <IFRAME frameBorder=0 id=top name=top scrolling=no src="top.php" 
     style="HEIGHT: 56px; VISIBILITY: inherit; WIDTH: 1003px; Z-INDEX: 3"> </IFRAME>
        </div>
       </td>
      </tr>
    </table>
      <table width="1003" height="620" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="212" height="220" valign="top" bgcolor="#CCCC66" id="lt" style="display:">
          	<div align="center">
              <td width="209" valign="top" bgcolor="#FFFF99">
              	<?php include("left.php");?></td>
          </div>
          </td>
          <td width="13" height="584" background="images/bg_line.gif">
          	<div align="center"></div></td>
          <td width="778" bgcolor="#FFFFFF" id="mn">
          	<div align="center" class="outer-container">
	              <IFRAME frameBorder=0 id=main name=main scrolling=no src="lookdd.php" 
	      style="HEIGHT: 100%; VISIBILITY: inherit; WIDTH: 778px; height: 600px; Z-INDEX: 1"> 
	      				</IFRAME>
	          </div>
          </td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
