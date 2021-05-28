<?php  
    require_once('config.php');  
  
    //文件头部设置  
    error_reporting(E_ALL &~E_NOTICE &~E_DEPRECATED);  
  
    //1.连库  
    $con = mysql_connect('localhost','root', '');
    if(!$con) {  
        echo mysql_error();  
    }  
    //2.选库  
    mysql_select_db("book_shop");
    if(!mysql_select_db("book_shop")) {  
        echo mysql_error();  
    }  
    //3.字符集  
    mysql_query("set names 'utf8'");
    if(!mysql_query("set names 'utf8'")) {  
        echo mysql_error();  
    }  
?>  