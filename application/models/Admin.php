<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Admin 模型
 */

class Admin extends CI_Model {

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->database();
    }

    /**
     * 后台登陆账号密码验证
     * @param $data
     * @return bool
     */
    public function validate($data)
    {
        if(empty($data['account']) || empty($data['password'])) return false; //如果账号或密码为空，返回false

        $result = $this->db->select('id, name ,account')
            ->from('admin')
            ->where(array('account'=>$data['account'],'password'=>md5($data['password'])))
            ->get()
            ->result();

        if(count($result)>0){
            setAdminSession($result);//登陆成功写入session
            return true;
        }else{
            return false;
        }
    }
}
