<?php
$date=date("Y-m-d H:i:s");//取得系统时间 
$ip = $HTTP_SERVER_VARS[REMOTE_ADDR]; //取得发言的IP地址 
$text=encode($gb_text);//去掉留言内容后面的空格. 
$fp=fopen("gb.dat","a");//以只写模式打开gb.dat文本文件,文件指针指向文件尾部. 
$str=$ip."|".$date."|".$gb_name."|".$gb_email."|".$gb_home."|".$face."|".$gb_qq."|".$head."|".$text."|".$reply." ";//将所有留言的数据赋予变量$str，"|"的目的是用来今后作数据分割时的数据间隔符号。 
fwrite($fp,$str);//将数据写入文件 
fclose($fp);//关闭文件 
showmessage("留言成功!","index.php","3");//留言成功，3秒后自动返回主界面。
?>
