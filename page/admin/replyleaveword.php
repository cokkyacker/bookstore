<?php error_reporting(0); ?>
<html>
<head>
    <title>查看留言</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <script language="javascript">
        function chkinput1(form)
        {
            if(form.reply.value=="")
            {
                alert("请输入回复内容!");
                form.reply.select();
                return(false);
            }
            return(true);
        }

    </script>

</head>
<?php
include("conn/conn.php");
$id=$_GET[id];
$sql=mysql_query("select * from tb_leaveword where id='".$id."'",$conn);
$info=mysql_fetch_array($sql);

?>
<body topmargin="0" leftmargin="0" bottommargin="0" >
<table width="750" border="0" cellspacing="1" cellpadding="10" align="center">
    <form name="form1" method="post" action="savereplyleaveword.php?id=<?php echo $info[id];?>" onSubmit="return chkinput1(this)">
    <tr >
        <td colspan="2" align="center">留言回复</td>
        <td align="left">留言者ID:<?php echo $info[id];?></td>
    </tr>
    <tr>
        <td width="100" align="center">回复内容:</td>
        <td align="left">
            <textarea onkeyup="this.value=this.value.replace(/^ +| +$/g,'')" name="reply" rows="8" cols="60" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></textarea>
        </td>

    </tr>
    <tr>
        <td align="center"><input type="button" align="center" value="返回" class="buttoncss" onClick="javascript:history.back();"></td>
        <td colspan="2" align="center"><input name="submit" type="submit" class="buttoncss" value="提交" ></td>
    </tr>
         </form>
   </table>
   </body>
