<?php

/* 
 * 公共函数文件,现在都是PHP文件
 */
function load_config($config_file){
	include is_file($config_file);
}

/**
 * 从配置文件中获取配置数值,动态设置配置，导入配置数据(支持一维数组，二维数组)，
 * @param $name 配置名
 * @param $value 配置值
 * @param $default 默认值
 * @author 马棚涛<1160644523@qq.com>
 */
function C($name=null, $value=null,$default=null){
	static $_name = [];
	if(empty($_name[$name])){
		return $_name;
	}
	//优先设置、获取配置值
	if(is_string($name)){
		if(!strpos($name,'.')){
			if(!is_null($value)){
				$_name[$name] = $value;
			}
			return isset($_name[$name]) ? $_name[$name] : $default;
		}else{
			$name = explode('.',$name);
			$name[0] = strtoupper($names[0]);
			if(!is_null($value)){
				$_name[$names[0]][$names[1]] = $value;
			}
			return isset($_name[$names[0]][$names[1]]) ? $_name[$names[0]][$names[1] : $default;
		}
	}
	if(is_array($name)){
		$_name = array_merge($_name,array_change_keys_case($name,CASE_UPPER));
	}
	return $_name[$name];
}


