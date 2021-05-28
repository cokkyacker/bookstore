<?php error_reporting(0); ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
include("conn/conn.php");
if(is_numeric($_POST[shichangjia])==false || is_numeric($_POST[huiyuanjia])==false)
 {
   echo "<script>alert('价格只能为数字！');history.back();</script>";
   exit;
 }
if(is_numeric($_POST[shuliang])==false)
 {
   echo "<script>alert('库存只能为数字！');history.back();</script>";
   exit;
 }
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
$upfile=$_POST[upfile];
$jianjie=$_POST[jianjie];
if(ceil(($huiyuanjia/$shichangjia)*100)<=20)
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
if(trim($_FILES['upfile']['name']!=""))
 { 
  $uploadfile="admin/".$uploadfile;
}
else
 {
  $uploadfile="";
 }


$addtime=$nian."-".$yue."-".$ri;
mysql_query("insert into tb_book(title,jianjie,addtime,bind,anthor,tupian,typeid,shichangjia,huiyuanjia,publish,tuijian,shuliang,cishu)values('$title','$jianjie','$addtime','$bind','$anthor','$uploadfile','$typeid','$shichangjia','$huiyuanjia','$publish','$tuijian','$shuliang','0')",$conn);
echo "<script>alert('书籍".$title."添加成功!');window.location.href='addbook.php';</script>";
?>