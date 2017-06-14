<?php

/**
 * 入口文件
 * @author mapengtao<1160644523@qq.com>
 * @data 2017/6/14
 */
define('APP_DEBUG',true);
function show($re){
    echo '<pre>';
    print_r($re);
    echo '</pre>';
}
require "./Framework/Framework.php";

