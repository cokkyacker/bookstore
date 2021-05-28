<?php error_reporting(0); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>更改书籍信息</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<?php 
  include("conn/conn.php");
  $sql1=mysql_query("select * from tb_book where id= $_GET[id] ",$conn);
  $info1=mysql_fetch_array($sql1);
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<p>&nbsp;</p>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" bgcolor="#CCCC66"><div align="center" class="style1">修改书籍信息</div></td>
  </tr>
  <tr>
    <td height="253" bgcolor="#666666"><table width="750" border="0" cellpadding="0" cellspacing="0">
        <script language="javascript">
	function chkinput(form)
	{
	  if(form.title.value=="")
	   {
	     alert("请输入书籍名称!");
		 form.title.select();
		 return(false);
	   }
	  
	
	
	  if(form.huiyuanjia.value=="")
	   {
	     alert("请输入书籍会员价!");
		 form.huiyuanjia.select();
		 return(false);
	   }
	 
	
	
	  if(form.shichangjia.value=="")
	   {
	     alert("请输入书籍市场价!");
		 form.shichangjia.select();
		 return(false);
	   }
	  if(form.bind.value=="")
	   {
	     alert("请输入装订!");
		 form.bind.select();
		 return(false);
	   }
	   
	   
	   if(form.publish.value=="")
	   {
	     alert("请输入出版社!");
		 form.publish.select();
		 return(false);
	   }
	   
	   if(form.anthor.value=="")
	   {
	     alert("请输入作者!");
		 form.anthor.select();
		 return(false);
	   }
	   if(form.shuliang.value=="")
	   {
	     alert("请输入书籍数量!");
		 form.shuliang.select();
		 return(false);
	   }
	   if(form.jianjie.value=="")
	   {
	     alert("请输入书籍简介!");
		 form.jianjie.select();
		 return(false);
	   }
	   return(true);
	}
    </script>
        <form name="form1"  enctype="multipart/form-data" method="post" action="savechangebook.php?id=<?php echo $_GET[id];?>" onSubmit="return chkinput(this)">
          <tr>
            <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">书籍名称：</div></td>
            <td width="618" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="title" size="25" class="inputcss" value="<?php echo $info1[title];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">上市时间：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <select name="nian" class="inputcss">
                  <?php 
  for($i=1950;$i<=2050;$i++)
  {
 ?>
                  <option <?php if(substr($info1[addtime],0,4)==$i){echo "selected";}?>><?php echo $i;?></option>
                  <?php 
  }
 ?>
                </select>
                年
                <select name="yue" class="inputcss">
                  <?php 
            for($i=1;$i<=12;$i++)
             {
            ?>
                  <option <?php if(substr($info1[addtime],5,1)==$i){echo "selected";} ?>><?php echo $i;?></option>
                  <?php 
             }
             ?>
                </select>
                月
                <select name="ri" class="inputcss">
                  <?php 
            for($i=1;$i<=31;$i++)
             {
            ?>
                  <option <?php if(substr($info1[addtime],7,1)==$i){echo "selected";} ?>><?php echo $i;?></option>
                  <?php 
             }
             ?>
                </select>
                日</div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">挂售价格：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">市场价：
                    <input type="text" name="shichangjia" size="10" class="inputcss" value="<?php echo $info1[shichangjia];?>">
                元&nbsp;&nbsp;会员价：
                <input type="text" name="huiyuanjia" size="10" class="inputcss" value="<?php echo $info1[huiyuanjia];?>">
                元</div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">书籍类型：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <?php
			$sql=mysql_query("select * from tb_type order by id desc",$conn);
			$info=mysql_fetch_array($sql);
			if($info==false)
			{
			  echo "请先添加书籍类型!";
			}
			else
			{
			?>
                <select name="typeid" class="inputcss">
                  <?php
			do
			{
			?>
                  <option value=<?php echo $info[id];?> <?php if($info1[typeid]==$info[id]) {echo "selected";}?>><?php echo $info[typename];?></option>
                  <?php
			}
			while($info=mysql_fetch_array($sql));
			?>
                </select>
                <?php
		     }
		    ?>
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">装订：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <select name="bind" class="inputcss">
                  <option value="平装" <?php if(trim($info1[bind])=="平装"){echo "selected";}?>>平装</option>
                  <option value="精装" <?php if(trim($info1[bind])=="精装"){echo "selected";}?>>精装</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td height="22" bgcolor="#FFFFFF"><div align="center">出版社：</div></td>
            <td height="22" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="publish" class="inputcss" size="20" value="<?php echo $info1[publish];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">作者：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="anthor" class="inputcss" size="20" value="<?php echo $info1[anthor];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">是否推荐：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <select name="tuijian" class="inputcss" >
                  <option value=1 <?php if($info1[tuijian]==1) {echo "selected";}?>>是</option>
                  <option value=0 <?php if($info1[tuijian]==0) {echo "selected";}?>>否</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">书籍数量：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="shuliang" class="inputcss" size="20" value="<?php echo $info1[shuliang];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">书籍图片：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
			<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                <input name="upfile" type="file" class="inputcss" id="upfile" size="30">
            </div></td>
          </tr>
          <tr>
            <td height="80" bgcolor="#FFFFFF"><div align="center">书籍简介：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <textarea name="jianjie" cols="50" rows="8" class="inputcss"><?php echo $info1[jianjie];?></textarea>
            </div></td>
          </tr>
          <tr>
            <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center">
              <input type="submit" class="buttoncss" value="更改">
              &nbsp;&nbsp;
                <button  class="buttoncss"> <a href="editbook.php">取消</a></button>
            </div></td>
          </tr>
        </form>
    </table></td>
  </tr>
</table>
</body>
</html>
