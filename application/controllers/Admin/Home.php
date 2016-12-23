<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 后台登陆后首页控制器
 */
namespace application\controller\Admin\Home;

class Home extends AController {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        echo 'hello world';
		//$this->load->view('admin/home/index');
	}
}
