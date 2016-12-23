<?php
/**
 * 登录的控制器
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

	public function index()
	{
		$this->load->view('admin/login/index');
	}
}
