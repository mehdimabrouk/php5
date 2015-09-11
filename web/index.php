<?php


class SessionStorage{

    protected $storage;
public function __construct(){
    $this->storage = new Sess
//    session_name($cookieName);
//    session_start();
}

    function set($key,$value){
        $_SESSION[$key] =   $value;
    }

    function get($key){
        return $_SESSION[$key];
    }

}