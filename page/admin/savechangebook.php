<?php error_reporting(0); ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
include("conn/conn.php");
$title=$_POST[title];
$nian=$_POST[nian];
$yue=$_POST[yue];
$ri=$_POST[ri];
$shichangjia=$_POST[shichangjia];
$huiyuanjia=$_POST[huiyuanjia];
$typeid=$_POST[typeid];
$bind=$_POST[bind];
$anthor=$_POST[anthor];
$publish=$_POST[publish];
$tuijian=$_POST[tuijian];
$shuliang=$_POST[shuliang];
$jianjie=$_POST[jianjie];
$addtime=$nian."-".$yue."-".$ri;
 if(ceil(($huiyuanjia/$shichangjia)*100)<=80)
 {
 
    $tejia=1;
 }
 else
 {
    $tejia=0;
 }



function getname($exname){
   $dir = "upimages/";
   $i=1;
   if(!is_dir($dir)){
      mkdir($dir,0777);
   }
   
   while(true){
       if(!is_file($dir.$i.".".$exname)){
	       $name=$i.".".$exname;
	       break;
	   }
	   $i++;
	 }

   return $dir.$name;
}

$exname=strtolower(substr($_FILES['upfile']['name'],(strrpos($_FILES['upfile']['name'],'.')+1)));
$uploadfile = getname($exname);

move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile);

$uploadfile="admin/".$uploadfile;

if($upfile!="")
{
    $sql=mysql_query("select * from tb_book where id= $_GET[id] ",$conn);
    $info=mysql_fetch_array($sql);
    @unlink(substr($info[tupian],6,(strlen($info[tupian])-6)));
}


mysql_query("update tb_book set title='$title',jianjie='$jianjie',addtime='$addtime',bind='$bind',anthor='$anthor',tupian='$uploadfile',typeid='$typeid',shichangjia='$shichangjia',huiyuanjia='$huiyuanjia',publish='$publish',tuijian='$tuijian',shuliang='$shuliang' where id= ".$_GET[id]." ",$conn);
echo "<script>alert('书籍".$title."修改成功!');window.location='editbook.php';</script>";
?>