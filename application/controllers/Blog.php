<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 博客控制器
 */

class Blog extends HController {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $this->load->model('Article');
        $id = $this->input->get('id');
        if(!$id) show_404();
        $data['article']=$this->Article->getArticle($id);
        $this->hasLayoutView('blog/index',$data);
	}

}
