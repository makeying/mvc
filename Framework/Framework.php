<?php

//定义常量
define('DS',DIRECTORY_SEPARATOR); //路径分隔符
define('EXT','.class.php');
define('FRAMEWORK_PATH',dirname(__FILE__).DS);  //框架目录
defined('APP_PATH') or define('APP_PATH',dirname($_SERVER['SCRIPT_FILENAME']).DS);
//核心类库路径
define('CORE_PATH',FRAMEWORK_PATH.'Core'.DS);
define('COMMON_PATH',APP_PATH.'Common'.DS);
define('CONF_PATH',APP_PATH.'Conf'.DS);
//核心类库
define('HEART_PATH',CORE_PATH.'Heart'.DS);
//行为类库
define('BEHAVIOR_PATH',CORE_PATH.'Behavior'.DS);
//第三方类库
define('VENDOR_PATH',CORE_PATH.'Vendor'.DS);

require FRAMEWORK_PATH.'Base'.EXT;
Base::run();






