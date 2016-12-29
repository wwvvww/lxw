<?php
/**
 *  QueryList使用示例
 *  
 * 入门教程:http://doc.querylist.cc/site/index/doc/4
 * 
 * QueryList::Query(采集的目标页面,采集规则[,区域选择器][，输出编码][，输入编码][，是否移除头部])
* //采集规则
* $rules = array(
*   '规则名' => array('jQuery选择器','要采集的属性'[,"标签过滤列表"][,"回调函数"]),
*   '规则名2' => array('jQuery选择器','要采集的属性'[,"标签过滤列表"][,"回调函数"]),
*    ..........
*    [,"callback"=>"全局回调函数"]
* );
 */

require 'vendor/autoload.php';
use QL\QueryList;

//获取采集对象
$hj = QueryList::Query('http://www.china-laoling.gov.cn/n3709666/n3710003/index.html',
      array(
        'time' =>array('.list-li>li>span:eq(2)','text'),
        'title'=>array('.list-li>li>a:eq(2)','text'),
        'link' =>array('.list-li>li>a:eq(2)','href')
            )
                      );
//输出结果：二维关联数组
print_r($hj->data);

//转换数据为组
$da = $hj->data;

//判断发表时间是否为当前时间
if($da[1]['time'] == date('Y-m-d')){
    echo "是今天";
}else{
    echo "非今天";
}
?>