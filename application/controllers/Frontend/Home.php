<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 6/25/2018
 * Time: 3:12 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        //$this->load->database();
        $data            = $this->db->get('evaluate_custumer')->result_object();
        $list_service2   = $this->db->where(['special'=>1 ,'status' => 1])->get('sserive')->result_object();
        $list_service    = $this->db->where(['special'=>0 ,'status' => 1])->get('sserive')->result_object();
        $list_img        = $this->db->where('status',1)->get('library_img')->result_object();
        $list_img_eight  = $this->db->where('status',1)->limit(7, 0)->get('library_img')->result_object();


        $list_menu_havefresh = $this->db->where(['type'=>1 ,'status' => 1])->get('menu')->result_object();
        $list_menu_havefresh2 = $this->db->where(['type'=>2 ,'status' => 1])->get('menu')->result_object();
        $list_menu_havefresh3 = $this->db->where(['type'=>3 ,'status' => 1])->get('menu')->result_object();
        $list_menu_havefresh4 = $this->db->where(['type'=>4 ,'status' => 1])->get('menu')->result_object();
        $list_config = $this->db->get('config')->first_row();

        $this->load->view('Home/trangchu', compact('data','list_service'
            ,'list_service2','list_img','list_menu_havefresh','list_menu_havefresh2',
            'list_menu_havefresh3','list_menu_havefresh4','list_img_eight','list_config'));
    }



}
