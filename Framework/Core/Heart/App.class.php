<?php

/* 
 * 启动脚本，路由分配
 */
namespace Heart;
class App{

	public static function run(){
		//初始化
		//App::init();
		Dispacher::dispach();
		//实例化类
		App::control();
	}
}

