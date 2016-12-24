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
     * 通过id获取article的内容
     * @param $id
     * @return bool
     */
    public function getArticle($id)
    {
        $result = $this->db->select('id, title, content')
            ->from('article')
            ->where('id', $id)
            ->get()
            ->result();

        return count($result)>0?$result[0]:false;
    }
}
