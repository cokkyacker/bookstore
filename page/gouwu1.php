<?php error_reporting(0); ?>
<?php
 session_start();
 header("Content-type:text/html;charset=utf-8");  
 if($_SESSION[username]==""){
    echo "<script>alert('请先登录，后购物!');history.back();</script>";
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
    <td width="229" height="438" valign="top" bgcolor="#FFFFFF">
    	<?php include("../page/left_menu.php");?>
    </td>
    <td width="761" align="center" valign="top" bgcolor="#FFFFFF">
    	<table width="550" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
    </table>
      <table width="757" border="0" align="center" cellpadding="0" cellspacing="0">
        <form name="form1" method="post" action="../page/gouwu1.php">
          <tr>
            <td height="46" background="../img/images/cart.gif"></td>
          </tr>
          <tr>
            <td  bgcolor="#FFFFFF">
            	<table width="700" border="0" align="center" cellpadding="0" cellspacing="1">
                <?php
			  session_register("total");
			  if($_POST[qk]=="yes"){
			     $_SESSION[producelist]="";
				 $_SESSION[quatity]=""; 
			  }
			   $arraygwc=explode("@",$_SESSION[producelist]);
			   $s=0;
			   for($i=0;$i<count($arraygwc);$i++){
			       $s+=intval($arraygwc[$i]);
			   }
			  if($s==0 ){
				   echo "<tr>";
                   echo" <td height='25' colspan='6' bgcolor='#FFFFFF' align='center'>您的购物车为空!</td>";
                   echo"</tr>";
				}
			  else{ 
			?>
                <tr>
                  <td width="125" height="25" bgcolor="#FFFFFF"><div align="center">书籍名称</div></td>
                  <td width="52" bgcolor="#FFFFFF"><div align="center">数量</div></td>
                  <td width="64" bgcolor="#FFFFFF"><div align="center">市场价</div></td>
                  <td width="64" bgcolor="#FFFFFF"><div align="center">会员价</div></td>
                  <td width="51" bgcolor="#FFFFFF"><div align="center">折扣</div></td>
                  <td width="66" bgcolor="#FFFFFF"><div align="center">小计</div></td>
                  <td width="71" bgcolor="#FFFFFF"><div align="center">操作</div></td>
                </tr>
                <?php
			    $total=0;
			    $array=explode("@",$_SESSION[producelist]);
				$arrayquatity=explode("@",$_SESSION[quatity]);
				 while(list($name,$value)=each($_POST)){
					  for($i=0;$i<count($array)-1;$i++){
					    if(($array[$i])==$name){
						  $arrayquatity[$i]=$value;  
						}
					}
				}
			    $_SESSION[quatity]=implode("@",$arrayquatity);
				
				for($i=0;$i<count($array)-1;$i++){ 
				   $id=$array[$i];
				   $num=$arrayquatity[$i];
				  
				  if($id!=""){
				   $sql=mysql_query("select * from tb_book where id='".$id."'",$conn);
				   $info=mysql_fetch_array($sql);
				   $total1=$num*$info[huiyuanjia];
				   $total+=$total1;
				   $_SESSION["total"]=$total;
			?>
                <tr>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[title];?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">
                  <input type="text" name="<?php echo $info[id];?>" size="2" class="inputcss" value=<?php echo $num;?>>
                  </div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[shichangjia];?>元</div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[huiyuanjia];?>元</div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo @(ceil(100-($info[huiyuanjia]/$info[shichangjia])*100))."%";?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[huiyuanjia]*$num."元";?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="../page/removegwc.php?id=<?php echo $info[id]?>">删除</a></div></td>
                </tr>
                <?php
			      }
				 }
			 ?>
                <tr>
                  <td height="25" colspan="8" bgcolor="#FFFFFF">
                  	<div align="right">
                      <table width="700" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="125">
                          	<div align="center">
                              <input name="submit2" type="submit" class="buttoncss" value="更改书籍数量">
                         	 </div>
                          </td>
                          <td width="125">
                          	<div align="center">
                          		<a href="../page/gouwu2.php">去收银台</a></div></td>
                          <td width="125">
                          	<div align="center">
                          		<a href="../page/gouwu1.php?qk=yes">清空购物车</a>
                          		</div>
                          		</td>
                          <td width="125">
                          	<div align="left">总计：<?php echo $total;?></div></td>
                        </tr>
                      </table>
                  </div></td>
                </tr>
                <?php
			 }
			?>
            </table></td>
          </tr>
        </form>
    </table></td>
  </tr>

</table>
</div>
<?php
include("bottom.php");
?>