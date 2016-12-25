<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends HController {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $page = $this->input->get('per_page');
        $this->load->model('Article');
        $data['all'] = $this->Article->getPageArticles($page?:0,5); //全部博客的数据
        $data['hits'] = $this->Article->getHitsArticles(6);//点击排行的数据
        $data['new'] = $this->Article->getnewArticles(6);//最新文章的数据
		$this->hasLayoutView('home/index',$data);
	}
}
