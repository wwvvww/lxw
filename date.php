<?php
date_default_timezone_set('PRC'); 
echo date("c");
echo '<br />'.date("Y");
echo '<br />';
echo sprintf("%u\n", ip2long("127.0.0.1"));
echo '<br />';
echo long2ip('2130706435');
?>
