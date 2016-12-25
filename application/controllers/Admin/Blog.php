<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 博客控制器
 */

class Blog extends AController {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $this->load->model('Article');
        $data['list']=$this->Article->getAllArticles()->result();
        $this->hasLayoutView('admin/blog/index',$data);
	}

    /**
     * 新建一篇博客
     */
    public function write()
    {
        $this->hasLayoutView('admin/blog/write');
	}

    /**
     * 修改一篇博客
     */
    public function update()
    {
        $id = $this->input->get('id');
        if($id == null) { show_404(); } //没有id的话,跳转404
        $this->load->model('Article');
        $data = $this->Article->getArticle($id);
        if(!$data) { show_404(); } //如果找不到符合的数据,跳转404
        $this->hasLayoutView('admin/blog/update',$data);
	}

    /**
     * 处理write页面和update的ajax传来的数据
     * @return array
     */
    public function ajax()
    {
        if($this->input->is_ajax_request()){
            $data =  array('title'=>$this->input->post('title'),
                'content'=>$this->input->post('content'),
                'abstract'=>$this->input->post('abstract'));

            if(empty($data['title']) || empty($data['content'])){
                $res = array('code'=>'400');//传递的参数为空
            }else {
                $res = array('code'=>'200','result'=>$this->save($data,$this->input->post('id')));
            }
        }else{
            $res = array('code'=>'500');
        }
        $this->returnAjax($res);
	}
    /**
     * 删除一篇博客
     */
    public function del()
    {
        if($this->input->is_ajax_request()) {
            $id = $this->input->post('id');
            if(empty($id)){
                $res = array('code'=>'400');//传递的参数为空
            }else{
                $res = array('code'=>'200','result'=>$this->delete($id));
            }
        }else{
            $res = array('code'=>'500');
        }
        $this->returnAjax($res);
	}

    /**
     * 保存blog到数据表article
     * @param $data 保存的数据
     * @param null $id 如果是更新,传入需要更新的article id
     */
    public function save($data,$id = null)
    {
        $this->load->model('Article');
        if($id == null){
            return $this->Article->insert($data);
        }else{
            return $this->Article->update($data,$id);
        }
	}

    /**
     * 删除某一条article表记录(通过id来删除)
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        $this->load->model('Article');
        return $this->Article->del($id);
	}

}
