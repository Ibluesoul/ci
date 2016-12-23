<?php
/**
 * 后台登录的控制器
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
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
