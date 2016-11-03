<?php
exec("SYSTEMINFO",$result);

//数组写入文本文件 
$time = time();
//使用fopen("$time.txt",'w');可以以当前时间命令文件,以单引号刚只是变量
$fp = fopen("$time.txt",'a+');

fwrite($fp,var_export($result,true));
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
