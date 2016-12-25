<?php
/**
 * 自定义扩展类
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    /**
     * 处理ajax返回的数组
     * @param $res
     */
    protected function returnAjax($res){
        echo json_encode($res);
    }

}

/**
 * 前台controller继承
 */
class HController extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 加载包含layout的视图
     * @param $view
     * @param null $data 传参
     */
    protected function hasLayoutView($view,$data=null){
        $this->load->view('layout/header');
        $this->load->view($view, $data);
        $this->load->view('layout/footer');
    }

}

/**
 * 后台controller继承
 */
class AController extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('session');
        if(!isAdminSession()){
            redirect('admin/login/index');//如果没有登陆,则重定向到登陆页面
        }
    }

    /**
     * 加载包含layout的视图
     * @param $view
     * @param null $data 传参
     */
    protected function hasLayoutView($view,$data=null){
        $this->load->view('admin/layout/header');
        $this->load->view($view, $data);
        $this->load->view('admin/layout/footer');
    }
}
