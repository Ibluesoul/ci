<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Article 模型
 */

class Article extends CI_Model {

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->database();
    }

    /**
     * 插入数据到article表
     * @param $data 要插入的数据
     * @return bool
     */
    public function insert($data)
    {
        $data = $data + array('admin_id'=>$_SESSION['id'],
                'created_at'=>date('Y-m-d H:i:s',time()));
        $result = $this->db->insert('article', $data);
        return $result?true:false;
    }

    /**
     * 更新数据到article表
     * @param $data 要更新的数据
     * @param $id 要更新的数据在该表中的id
     * @return bool
     */
    public function update($data,$id)
    {
        $data = $data + array('admin_id'=>$_SESSION['id'],
                'updated_at'=>date('Y-m-d H:i:s',time()));
        $result = $this->db->update('article', $data, array('id'=>$id));
        return $result?true:false;
    }

    /**
     * 删除article表的某一条数据(通过id来删除)
     * @param $id
     * @return bool
     */
    public function del($id)
    {
        $result = $this->db->delete('article', array('id'=>$id));
        return $result?true:false;
    }

    private function getTable()
    {
        $result = $this->db->select('id, title, content, updated_at, created_at,hits')
            ->from('article');
        return $result;
    }
    /**
     * 通过id获取article的内容
     * @param $id
     * @return bool
     */
    public function getArticle($id)
    {
        $result = $this->getTable()
            ->where('id', $id)
            ->get()
            ->result();

        return count($result)>0?$result[0]:false;
    }

    /**
     * 获取所有的article文章
     * @return mixed
     */
    public function getAllArticles()
    {
        $result = $this->getTable()
            ->order_by('created_at desc ')
            ->get();
        return $result;
    }

    /**
     * 文章按照点击量排序
     * @param int $pagesize 显示的条数
     * @return mixed
     */
    public function getHitsArticles($pagesize = 6)
    {
        $result = $this->getTable()
            ->limit($pagesize,0)
            ->order_by('hits desc ')
            ->get();
        return $result;
    }

    /**
     * 文章按照发布时间排序
     * @param int $pagesize 显示的条数
     * @return mixed
     */
    public function getNewArticles($pagesize = 6)
    {
        $result = $this->getTable()
            ->limit($pagesize,0)
            ->order_by('created_at desc ')
            ->get();
        return $result;
    }

    /**
     * 分页
     * @param int $page 页码
     * @param int $pagesize 每页显示的条数
     * @return mixed
     */
    public function getPageArticles($page = 0 ,$pagesize = 5)
    {
        //分页开始,加载分页类
        $this->load->library('pagination');
        $count = $this->getAllArticles()->num_rows();
        $config['per_page'] = $pagesize;//每页展示几个项目
        $config['base_url'] = site_url('home/index');//包含分页控制器类和方法
        $config['page_query_string'] = true; //url使用传统的?=形式
        $config['total_rows'] = $count;//需分页的总数据行数，我这里从数据库查询到
        $config['uri_segment'] = $pagesize;
        //$offset = intval($this->uri->segment($page));//uri中分段函数，从控制器开始数，起始数字是1
        $this->pagination->initialize($config);//进行序列化
        $data['page_link'] = $this->pagination->create_links();//生成分页按钮
        $data['list'] = $this->getTable()
                    ->limit($pagesize,$page)
                    ->order_by('created_at desc ')
                    ->get()
                    ->result();
        //分页结束
        return $data;
    }
}
