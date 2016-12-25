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
        $data['article']=$this->Article->getArticle($id);//获取单条博客文章数据
        $data['upArticle'] = $this->Article->getUpArticle($data['article']->created_at);//获取该条博客文章的上一篇
        $data['downArticle'] = $this->Article->getDownArticle($data['article']->created_at);//获取该条博客文章的下一篇
        $this->Article->hits($id);//增加一次浏览记录
        $this->hasLayoutView('blog/index',$data);
	}

}
