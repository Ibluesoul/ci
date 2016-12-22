<?php
/**
 * 登录的控制器
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
        //echo 'hello world';
		$this->load->view('admin/login/index');
	}
}
