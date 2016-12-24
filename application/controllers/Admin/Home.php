<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 后台登陆后首页控制器
 */

class Home extends AController {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $this->hasLayoutView('admin/home/index',null);
	}

    /**
     * 登出
     */
    public function logout()
    {
        removeAdminSession();
        redirect('admin/login/index');
	}
}
