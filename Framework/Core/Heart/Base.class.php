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
            list($lib,$ext) = explode('\\', $class, 2);
            if(in_array($lib,['Behavier','Heart','Vendor'])){
                $lib_path = CORE_PATH.$lib;
            }else{
                
            }
        }
    }
}

