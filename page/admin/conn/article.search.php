<?php  
    require_once('connect.php');  
    $key = $_GET['key'];  
    $sql = "select * from tb_shangpin where mingcheng or addtime like '%$key%' order by addtime desc";  
    $query = mysql_query($sql);
   // echo "112".$query;  
    if($query && mysql_num_rows($query)) {  
        while($row = mysql_fetch_assoc($query)) {  
            $data[] = $row;  
        }  
    } else { 
    	//echo 'no'; 
//  $data[]; 
    }  
//  echo "l2".$value['mingcheng'];
?>  
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <title>商品搜索</title>  
    <meta name="keywords" content=""/>  
    <meta name="description" content=""/>  
    <link rel="stylesheet" href="css/default.css" type="text/css">  
</head>  
<body>  
    
  
    <div id="page">  
        <div id="content">  
            <?php  
                if(empty($data)) {  
                    echo "当前没有商品，请管理员添加商品";  
                } else {  
                    foreach ($data as $value) {  
            ?>  
                  
                <div class="post">  
                    <h3 class="title">
                    	商品名称：<?php echo $value['mingcheng']; ?>
                    	<span style="color:#CCC; font-size:12px;">
                    		上架时间：<?php echo $value['addtime'];?></span></h3>  
                    <div class="entry">  
                        <?php echo $value['jianjie']; ?>  
                    </div>  
                    <div class="nn">
                    	<a href="../admin/changegoods.php" style="text-decoration: none; color: blue; font-size:14px ;">修改</a>
                    	<a href="admin/del" style="text-decoration: none; color: blue; font-size:14px ;">删除</a>
                    </div>
                    <!--<div class="meta">  
                        <p class="links"><a href="article.list.php" =<?php echo $value['id']; ?>" class="more">查看详细</a>  »  </p>  
                    </div>  -->
                </div>  
  
            <?php  
                    }  
                }  
            ?>  
        </div>  
  
        <div id="sidebar">  
            <ul>  
                <li id="search">  
                    <h2><b class="text1">Search</b></h2>  
                    <form action="article.search.php" method="get">  
                        <fieldset>  
                            <input type="text" id="s" name="key" >  
                            <input type="submit" id="x" value="搜索">  
                        </fieldset>  
                    </form>  
                </li>  
            </ul>  
        </div>  
  
        <div style="clear: both;"> </div>  
    </div>  
  
    <!--<div id="footer">  
        <p id="legal">Copyright &copyright; 2018-2019, CHENGYIMING, All Rights Reserved</p>  
    </div>  -->
</body>  
</html>  