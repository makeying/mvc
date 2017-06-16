<?php

/* 
 * 框架基础文件
 * @author mapengtao<1160644523@qq.com>
 */
namespace Heart;
class Base{
    //类映射
    private static $_map = [];
    
    public static function init(){
        spl_autoload_register("Heart\autoload");
        //初始化错误异常类

        //设置时区
        date_default_timezone_set("Asia/Shanghai");
        //加载核心文件
        $files = include UNITE_PATH."unite.php";
        if(is_array($files['core']) && !empty($files['core'])){
            foreach($files['core'] as $core_file){
                require $core_file;
            }
        }
        //加载核心配置文件
        if(is_array($files['config']) && !empty($files['config'])){
            foreach($files['config'] as $config_file){
                is_file($config_file)?C(load_config($config_file)):;
            }
        }
        //运行框架
        App::run();
    }
    
    /**
     * 自动加载类
     * @author mapengtao<1160644523@qq.com>
     * @param string $class 类名
     */
    public function autoload($class){
        if(isset(self::$_map[$class])){
            return self::$_map[$class];
        }elseif(false !== strpos($class,'\\')){
            $name = strstr('\\', $class, true);
            if(in_array($lib,['Behavier','Heart','Vendor']) && is_dir(CORE_PATH.$name)){
                $path = CORE_PATH.$name;
            }
            $filename = $lib_path.$class.EXT;
            if(file_exists($filename)){
                require $filename;
            }
        }else{
            $layer_arr = ['Model','Controller'];
            foreach($layer_arr as $layer){
                if($layer == substr($class, -strlen($layer))){
                    $filename = MODULE_PATH.$layer.$class.EXT;
                    if(file_exists($filename)){
                        require_one $filename;
                    }
                }
            }
        }
    }
}

