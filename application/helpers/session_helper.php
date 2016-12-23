<?php

function setAdminSession($data){
    foreach($data[0] as $k => $v){
        $_SESSION["$k"] = $v;
    }
}

function isAdminSession(){
    return isset($_SESSION['id']);
}

function removeAdminSession(){
    unset($_SESSION['id']);
}