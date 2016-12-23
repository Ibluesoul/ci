<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */

class AController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('session');
        $this->load->library('session');
        if(isAdminSession()){

        }else{

        }
    }
}
