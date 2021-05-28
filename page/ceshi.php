<?php
header("Content-type:text/html;charset=utf-8");
//获取上次登录的时间
if(!isset($_COOKIE['last_visit_time']))
{
    echo '您是第一次访问本站.';

    }else{
    //更新最新时间
    $lvt=$_COOKIE['last_visit_time'];
    echo '您上次访问的时间是:'.$lvt;
}
//把这次访问的时间写入cookie,并保存到客户端浏览器缓存中
date_default_timezone_set('PRC');
setcookie('last_visit_time',date("Y-m-d H:i:s"),time()+2*60);
$ipp=$_SERVER["HTTP_CLIENT_IP"];
setcookie('last_visit_ip',$_SERVER["REMOTE_ADDR"],time()+2*60);
$lvp=$_COOKIE['last_visit_ip'];
echo '您上次访问的ip是:'.$lvp;
echo $ipp;

function getIp()
{
    if ($_SERVER["HTTP_CLIENT_IP"] && strcasecmp($_SERVER["HTTP_CLIENT_IP"], "unknown")) {
        $ip = $_SERVER["HTTP_CLIENT_IP"];
    } else {
        if ($_SERVER["HTTP_X_FORWARDED_FOR"] && strcasecmp($_SERVER["HTTP_X_FORWARDED_FOR"], "unknown")) {
            $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else {
            if ($_SERVER["REMOTE_ADDR"] && strcasecmp($_SERVER["REMOTE_ADDR"], "unknown")) {
                $ip = $_SERVER["REMOTE_ADDR"];
            } else {
                if (isset ($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'],
                        "unknown")
                ) {
                    $ip = $_SERVER['REMOTE_ADDR'];
                } else {
                    $ip = "unknown";
                }
            }
        }
    }
    return ($ip);
}

echo getIp();
?>
