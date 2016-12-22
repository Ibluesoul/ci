<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 后台登陆后首页控制器
 */

class Home extends CI_Controller {

	public function index()
	{
        //echo 'hello world';
		$this->load->view('home/index');
	}
}
