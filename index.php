<?php error_reporting(0); ?>
<?php
include("page/conn/conn.php");
?>
<meta charset="utf-8">
<link href="css/font.css" rel="stylesheet">
<link rel="stylesheet" href="css/index.css"/>
<div style="max-width:950px;margin:0 auto">
    <?php
    /*date_default_timezone_set("PRC");
    session_start();
    if (($_SESSION[username] != "")) {
        include("../page/conn/conn.php");
        if ($_COOKIE['last_visit_time'] == "") {
            echo '您是第一次访问本站.';
            echo $_COOKIE['last_visit_time'];
            $lvt = $_COOKIE['last_visit_time'];
            echo '您本次访问的时间是:' . date("Y-m-d H:i:s");
            $lvp = $_COOKIE['last_visit_ip'];
            echo '您本次访问的ip是:' . $_SERVER["REMOTE_ADDR"];
        } else {
            //更新最新时间
            $lvt = $_COOKIE['last_visit_time'];
            echo '您上次访问的时间是:' . $lvt;
            $lvp = $_COOKIE['last_visit_ip'];
            echo '您上次访问的ip是:' . $lvp;
        }
        setcookie('last_visit_time', date("Y-m-d H:i:s"), time() + 2 * 60);
        setcookie('last_visit_ip', $_SERVER["REMOTE_ADDR"], time() + 2 * 60);
    }*/
    session_start();
    include("page/top.php");
    ?>
    <body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar" bgcolor="#ADD8E6">

    <table width="966" border="0" align="center" cellspacing="0" bgcolor="4682b4">
        <tr>
            <td bgcolor="#4682b4">
                <table width="966" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="120" valign="top" bgcolor="#FFFFFF" align="left"><?php include("page/left_menu.php"); ?></td>
                        <td width="750" height="438" align="center" valign="top" bgcolor="#FFFFFF">
                            <table width="748" border="0" cellspacing="0" cellpadding="0">

                                <tr>
          	<!--<br>-->
            <td width="730" bgcolor="#FFFFFF">
            	
            
            <!--	轮播开始-->
         <div class="content1">
            <div id="swap">
							<div class="left"><</div>
							<a href="" id="alianjie"><img src="" alt="" id="imgage" /></a>
							<div id="index"></div>
							<div class="right">></div>
						</div>
				</div>
				 <script>
							var oleft=document.getElementsByClassName('left')[0];//左按钮
							var oright=document.getElementsByClassName('right')[0];//右按钮
							var oswap=document.getElementById('swap');//整个外边框
							var oimg=document.getElementById('imgage');//img标签
							var arr_img=['img/adv1.png','img/adv2.png','img/adv3.png','img/adv4.png','img/adv5.png'];//图片地址链接
							var arr_href=['showfenlei.php','showfenlei.php','showfenlei.php','showfenlei.php','showfenlei.php'];//图片超链接
							var oa=document.getElementById('alianjie')//a链接
							var num=1;
							var i=0;
							var oindexvalue=document.getElementsByClassName('indexvalue');
							var oindex=document.getElementById('index');//索引
							
							oswap.onmouseover=function()//鼠标移到该上面
							{
								oleft.style.display="block";
								oright.style.display="block";
							}
							oswap.onmouseout=function()//鼠标移走
							{
								oleft.style.display="none";
								oright.style.display="none";
							}
							oleft.onmouseover=function()//鼠标移到左按钮
							{
								oleft.style.cssText="opacity: 0.6;"
							}
							oleft.onmouseout=function()//鼠标移开左按钮
							{
								oleft.style.cssText="opacity: 0.2;"
							}
							oright.onmouseover=function()//鼠标移到左按钮
							{
								oright.style.cssText="opacity: 0.6;"
							}
							oright.onmouseout=function()//鼠标移开左按钮
							{
								oright.style.cssText="opacity: 0.2;"
							}
							function myfunction()
							{
								oimg.src=arr_img[num-1];
								oa.href=arr_href[num-1];
							}
							myfunction();
							oright.onclick=function()//鼠标点击右按钮
							{	for(var t=0;t<arr_href.length;t++)
								{
									oindexvalue[t].style.background='brown';
								}
								if (num==arr_img.length) {num=1;}	
								 else{num++;}
								 oindexvalue[num-1].style.background="burlywood";
									myfunction();
							}
							function fun()
							{
								for(var t=0;t<arr_href.length;t++)
								{
									oindexvalue[t].style.background='brown';
								}
								if (num==arr_img.length) {num=1;}	
								 else{num++;}
								 oindexvalue[num-1].style.background="burlywood";
									myfunction();
							}
							var c=setInterval(fun,5000);//五秒换一张
							
							oleft.onclick=function()//鼠标点击左按钮
							{
								for(var t=0;t<arr_href.length;t++)
								{
									oindexvalue[t].style.background='brown';
								}		
								if(num==1)
								{
									num=arr_img.length;
								}
								else
								num--;
								oindexvalue[num-1].style.background="burlywood";
								myfunction();
							}
							function fwidth()//设置索引的宽(可以自动变换的)
							{
								oindex.style.width='arr_href.length*10+"px"';
							}
							fwidth();
							for(var j=0;j<arr_href.length;j++)//添加索引里的小圆球
							{
								oindex.innerHTML+="<span class='indexvalue' id='q1'>"+j+"</span>";//给索引小球添加内容j

							}

							var k=0;
							oindexvalue[0].style.background='red';
							for(i;i<arr_href.length;i++)
							{
								oindexvalue[i].onclick=function()
								{	k++;
									for(var t=0;t<arr_href.length;t++)
									{
										oindexvalue[t].style.background='brown';
									}
									this.style.backgroundColor="burlywood";
									oimg.src=arr_img[this.innerHTML];//用小球内容作为数组下标
								}
							}
						</script>


                <div class="content1">
                   <table frame=void >
                   <tr >
                           <td bgcolor="#9999FF" width="126">扫码购书有优惠！<img src="img/QR1.png" width="126" height="110"/></td>
                       </tr>

                            <tr>
								<td width="126"><img src="img/QR.jpg.png" width="126"/></td>
							</tr>
							<tr>
								<td  width="126"><img src="img/QR2.png" width="126" height="110"/></td>
							</tr>
						</table>
						
					</div>

           <!-- 	轮播结束-->

            	<table width="748" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="757"  height="50">　<img class="imga" src="img/sp2.png" width="20" height="20">&nbsp;&nbsp;<span class="fb"> 推荐书籍：　　　　　　　　　　　　　　　　　　　　　　</span>　　　　　　　　　　　　　　
                  	<a href="page/showtuijian.php"  style="float: right;">更多..</a></td>
                </tr>
              </table>
                <table width="750" border="00" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="755" height="110">
                    	<table width="650" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="345">

               <?php
               include("page/conn/conn.php");

			  $sql=mysql_query("select * from tb_book where tuijian=1 order by addtime desc limit 0,1");
			  $info=mysql_fetch_array($sql);
			  if($info==false){
			   echo "本站暂无推荐商品!";
			  }
			  else{

			  ?>

                               <table width="280"  border="0" cellspacing="0" cellpadding="0">
                                 <tr>
                                   <td width="100" rowspan="5"><div align="center">
                                       <?php
                       if(trim($info[tupian]=="")){
                         echo "暂无图片";
                       }
                       else{
                     ?>
                                       <img src="page/<?php echo $info[tupian];?>" width="90" height="120" border="0">
                                       <?php
                        }
                     ?>
                                   </div></td>
                                   <td width="11" height="16">&nbsp;</td>
                                   <td width="180"><font color="FF6501"><img src="img/images/circle.gif" width="10" height="10">&nbsp;<?php echo $info[title];?></font></td>
                                 </tr>
                                 <tr>
                                   <td height="16">&nbsp;</td>
                                   <td><font color="#000000">市场价：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                                 </tr>
                                 <tr>
                                   <td height="16">&nbsp;</td>
                                   <td><font color="#000000">会员价：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                                 </tr>
                                 <tr>
                                   <td height="16">&nbsp;</td>
                                   <td><font color="#000000">剩余数量：</font><font color="13589B">                                  <?php
                     if($info[shuliang]>0)
                     {
                        echo $info[shuliang];
                     }
                     else
                     {
                        echo "已售完";
                     }
                     ?>
   </font></td>
                                 </tr>
                                 <tr>
                                   <td height="30" colspan="2"><a href="page/lookinfo.php?id=<?php echo $info[id];?>"><img src="img/images/b3.gif" width="34" height="15" border="0"></a> <a href="page/addgouwuche.php?id=<?php echo $info[id];?>"><img src="img/images/b1.gif" width="50" height="15" border="0"></a>                                 </td>
                                 </tr>
                               </table>
                               <?php
                  }
                 ?>
                             </td>
                             <td width="265">
                               <?php
                 $sql=mysql_query("select * from tb_book where tuijian=1 order by addtime desc limit 1,1");
                 $info=mysql_fetch_array($sql);
                 if($info==true)
                 {
                 ?>
                               <table width="270"  border="0" cellspacing="0" cellpadding="0">
                                 <tr>
                                   <td width="100" rowspan="5"><div align="center">
                                       <?php
                       if(trim($info[tupian]=="")){
                         echo "暂无图片";
                       }
                       else{
                     ?>
                                       <img src="page/<?php echo $info[tupian];?>" width="90" height="120" border="0">
                                       <?php
                        }
                     ?>
                                   </div></td>
                                   <td width="11" height="16">&nbsp;</td>
                                   <td width="180"><font color="FF6501"><img src="img/images/circle.gif" width="10" height="10">&nbsp;<?php echo $info[title];?></font></td>
                                 </tr>
                                 <tr>
                                   <td height="16">&nbsp;</td>
                                   <td><font color="#000000">市场价：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                                 </tr>
                                 <tr>
                                   <td height="16">&nbsp;</td>
                                   <td><font color="#000000">会员价：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                                 </tr>
                                 <tr>
                                   <td height="16">&nbsp;</td>
                                   <td><font color="#000000">剩余数量：</font><font color="13589B">
                                     <?php
                     if($info[shuliang]>0)
                     {
                        echo $info[shuliang];
                     }
                     else
                     {
                        echo "已售完";
                     }
                     ?>
                                   </font></td>
                                 </tr>
                                 <tr>
                                   <td height="30" colspan="2"><a href="page/lookinfo.php?id=<?php echo $info[id];?>"><img src="img/images/b3.gif" width="34" height="15" border="0"></a> <a href="page/addgouwuche.php?id=<?php echo $info[id];?>"><img src="img/images/b1.gif" width="50" height="15" border="0"></a> </td>
                                 </tr>
                               </table>
                               <?php
                   }
                  ?>
                             </td>
                           </tr>
                       </table></td>
                     </tr>
                     <tr>
                       <td height="10" background="img/images/line1.gif"></td>
                     </tr>
                   </table>
                   <table width="748" border="0" align="center" cellpadding="0" cellspacing="0">
                     <tr>
                       <td height="46">&nbsp;&nbsp;<img class="imga" src="img/sp3.png" width="20" height="20">&nbsp;&nbsp;<span class="fb"> 最新书籍：</span>　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
                           <a href="page/shownewpr.php" style="float: right;">更多..</a></td>
                     </tr>
                   </table>
                   <table width="743" border="00" align="center" cellpadding="0" cellspacing="0">
                     <tr>
                       <td width="743" height="110"><table width="640" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
                           <tr>
                             <td width="365">
                               <?php
                 $sql=mysql_query("select * from tb_book order by addtime desc limit 0,1");
                 $info=mysql_fetch_array($sql);
                 if($info==false){
                  echo "本站暂无最新产品!";
                 }
                 else{
                 ?>
                               <table width="270"  border="0" cellspacing="0" cellpadding="0">
                                 <tr>
                                   <td width="100" rowspan="5"><div align="center">
                                       <?php
                       if(trim($info[tupian]=="")){
                         echo "暂无图片";
                       }
                       else{
                     ?>
                                       <img src="page/<?php echo $info[tupian];?>" width="90" height="120" border="0">
                                       <?php
                        }
                     ?>
                                   </div></td>
                                   <td width="11" height="16">&nbsp;</td>
                                   <td width="180"><font color="FF6501"><img src="img/images/circle.gif" width="10" height="10">&nbsp;<?php echo $info[title];?></font></td>
                                 </tr>
                                 <tr>
                                   <td height="16">&nbsp;</td>
                                   <td><font color="#000000">市场价：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                                 </tr>
                                 <tr>
                                   <td height="16">&nbsp;</td>
                                   <td><font color="#000000">会员价：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                                 </tr>
                                 <tr>
                                   <td height="16">&nbsp;</td>
                                   <td><font color="#000000">剩余数量：</font><font color="13589B">
                                     <?php
                     if($info[shuliang]>0)
                     {
                        echo $info[shuliang];
                     }
                     else
                     {
                        echo "已售完";
                     }
                     ?>
                                   </font></td>
                                 </tr>
                                 <tr>
                                   <td height="30" colspan="2"><a href="page/lookinfo.php?id=<?php echo $info[id];?>"><img src="img/images/b3.gif" width="34" height="15" border="0"></a> <a href="page/addgouwuche.php?id=<?php echo $info[id];?>"><img src="img/images/b1.gif" width="50" height="15" border="0"></a> </td>
                                 </tr>
                               </table>
                               <?php
                              }
                             ?>
                             </td>
                             <td width="265">
                               <?php
                 $sql=mysql_query("select * from tb_book order by addtime desc limit 1,1");
                 $info=mysql_fetch_array($sql);
                 if($info==true)

                 {
                 ?>
                               <table width="270"  border="0" cellspacing="0" cellpadding="0">
                                 <tr>
                                   <td width="100" rowspan="5"><div align="center">
                                       <?php
                       if(trim($info[tupian]=="")){
                         echo "暂无图片";
                       }
                       else{
                     ?>
                                       <img src="page/<?php echo $info[tupian];?>" width="90" height="120" border="0">
                                       <?php
                        }
                     ?>
                                   </div></td>
                                   <td width="11" height="16">&nbsp;</td>
                                   <td width="180"><font color="FF6501"><img src="img/images/circle.gif" width="10" height="10">&nbsp;<?php echo $info[title];?></font></td>
                                 </tr>
                                 <tr>
                                   <td height="16">&nbsp;</td>
                                   <td><font color="#000000">市场价：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                                 </tr>
                                 <tr>
                                   <td height="16">&nbsp;</td>
                                   <td><font color="#000000">会员价：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                                 </tr>
                                 <tr>
                                   <td height="16">&nbsp;</td>
                                   <td><font color="#000000">剩余数量：</font><font color="13589B">
                                     <?php
                     if($info[shuliang]>0)
                     {
                        echo $info[shuliang];
                     }
                     else
                     {
                        echo "已售完";
                     }
                     ?>
                                   </font></td>
                                 </tr>
                                 <tr>
                                   <td height="30" colspan="2"><a href="page/lookinfo.php?id=<?php echo $info[id];?>"><img src="img/images/b3.gif" width="34" height="15" border="0"></a> <a href="page/addgouwuche.php?id=<?php echo $info[id];?>"><img src="img/images/b1.gif" width="50" height="15" border="0"></a> </td>
                                 </tr>
                               </table>
                               <?php
                  }
                 ?>
                           </tr>
                           </table>
                       </td>
                     </tr>
                       <tr>
                           <td height="10"></td>
                       </tr>
                   </table>
            </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
            <tr width="950px" border="0" align="left">
                <?php
                include("page/bottom.php");
                ?>
        </tr>
        </tr>

    </table>
</div>
</body>