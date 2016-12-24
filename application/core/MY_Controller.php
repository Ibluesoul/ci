<?php
/**
 * 自定义扩展类
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {



}

/**
 * 前台controller继承
 */
class HController extends MY_Controller {

}

/**
 * 后台controller继承
 */
class AController extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('session');
        $this->load->library('session');
        if(isAdminSession()){

        }else{

        }
    }
}
