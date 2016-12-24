<?php

/**
 * 把账号信息写入session
 * @param $data
 */
function setAdminSession($data){
    foreach($data[0] as $k => $v){
        $_SESSION["$k"] = $v;
    }
}

/**
 * 判断账号id是否写入session
 * @return bool
 */
function isAdminSession(){
    return isset($_SESSION['id']);
}

/**
 * 删除登陆的账号id的session
 */
function removeAdminSession(){
    unset($_SESSION['id']);
}