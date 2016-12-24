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
        //$this->hasLayoutView('admin/home/index',null);
	}

    /**
     * 新建一篇博客
     */
    public function write()
    {
        $this->hasLayoutView('admin/blog/write');
	}

    /**
     * 处理write页面的ajax传来的数据
     * @return array
     */
    public function ajaxWrite()
    {
        if($this->input->is_ajax_request()){
            $data =  array('title'=>$this->input->post('title'),
                'content'=>$this->input->post('content'));

            if(empty($data['title']) || empty($data['content'])){
                $res = array('code'=>'400');//传递的参数为空
            }else {
                $res = array('code'=>'200','result'=>$this->save($data));
            }
        }else{
            $res = array('code'=>'500');
        }
        returnAjax($res);
	}

    /**
     * 修改一篇博客
     * @param $id
     */
    public function update($id)
    {

	}

    /**
     * 删除一篇博客
     * @param $id
     */
    public function del($id)
    {

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

}
