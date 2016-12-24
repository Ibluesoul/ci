<?php
/**
 * 后台登录的控制器
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('session');
        if(isAdminSession()){
            redirect('admin/home/index');//如果已经登陆,则重定向到后台首页
        }
    }

    /**
     * 后台登录页
     */
	public function index()
	{
		$this->load->view('admin/login/index');
	}

    /**
     * 后台登录的post方法
     */
    public function signIn()
    {
        $data = $this->input->post(array('account', 'password'));
        $this->load->model('Admin');
        $result = $this->Admin->validate($data);
        if($result){
            redirect('admin/home/index');
        }else{
            //登录失败
        }

	}
}
