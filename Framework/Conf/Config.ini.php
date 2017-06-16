<?php

/* 
 * 系统配置文件
 */

return array(
	//数据库配置,目前直接mysql
	'DB_TYPE'=>'mysql',
	'DB_USER'=>'',
	'DB_HOST'=>'',
	'DB_PASSWD'=>'',
	'DB_DSN'=>'',
	//请求参数,index.php?p=home&c=user@a=index
	'CONTROL_P'=>'p',
	'CONTROL_C'=>'c',
	'CONTROL_A'=>'a',
	//模板解析
	'TEMPLATE_ENGINE'=>'Smarty',

);
