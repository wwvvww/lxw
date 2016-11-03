<?php
//exec("SYSTEMINFO",$result);
// 定义一个函数getIP()
function getIP()
{
global $ip;
if (getenv("HTTP_CLIENT_IP"))
$ip = getenv("HTTP_CLIENT_IP");
else if(getenv("HTTP_X_FORWARDED_FOR"))
$ip = getenv("HTTP_X_FORWARDED_FOR");
else if(getenv("REMOTE_ADDR"))
$ip = getenv("REMOTE_ADDR");
else $ip = "Unknow";
return $ip;
}
 
// 使用方法：
echo getIP();

//数组写入文本文件 
$time = time();
//使用fopen("$time.txt",'w');可以以当前时间命令文件,以单引号刚只是变量
$fp = fopen("$time.txt",'a+');

//fwrite($fp,var_export($result,true));
fwrite($fp,getIP());
fclose($fp);

//显示数组获取到的内容，使用FOREACH不用设置循环次数
//foreach($result as $xiangmu)
  //  echo $xiangmu."<br/>";
/**
//for ($i=0;$i<50;$i++)
 //   echo "$result[$i].<br/> ";
**/

 //	print_r($result);
 	
 	?>
