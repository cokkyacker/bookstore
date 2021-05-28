<?php error_reporting(0); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>修改库存信息</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">

.style1 {color: #FFFFFF}

</style>
</head>
<?php 
  include("conn/conn.php");
  $sql1=mysql_query("select title,shuliang from tb_book where id= $_GET[id] ",$conn);
  $info1=mysql_fetch_array($sql1);
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<p>&nbsp;</p>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" bgcolor="#CCCC66"><div align="center" class="style1">修改库存信息</div></td>
  </tr>
  <tr>
    <td height="53" bgcolor="#666666"><table width="750" border="0" cellpadding="0" cellspacing="0">
        <script language="javascript">
	function chkinput(form)
	{

	   if(form.shuliang.value=="")
	   {
	     alert("请输入书籍数量!");
		 form.shuliang.select();
		 return(false);
	   }

	   return(true);
	}
    </script>
        <form name="form1"  enctype="multipart/form-data" method="post" action="savechangenumber.php?id=<?php echo $_GET[id];?>" onSubmit="return chkinput(this)">
          <tr>
            <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">书籍名称：</div></td>
            <td width="618" bgcolor="#FFFFFF"><div align="left">
                <?php echo $info1[title];?>
            </div></td>
          </tr>
         <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">书籍数量：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="shuliang" class="inputcss" size="20" value="<?php echo $info1[shuliang];?>">
            </div></td>
          </tr>
          <!--<?php
          	if(shuliang<=5){
          		echo "库存不足，请及时补充！";
          	}
          	else {
          		echo "库存充足！";
          	}
          ?>-->
          
          <tr>
            <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center">
              <input type="submit" class="buttoncss" value="更改">
              &nbsp;&nbsp;
                <button  class="buttoncss"> <a href="number.php">取消</a></button>
            </div></td>
          </tr>
        </form>
    </table></td>
  </tr>
</table>
</body>
</html>
