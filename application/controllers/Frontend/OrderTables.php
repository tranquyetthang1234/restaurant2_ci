<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 7/5/2018
 * Time: 12:52 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
 class OrderTables extends CI_Controller{
     public function __construct()
     {
         parent::__construct();
         $this->load->model('orderTable_model');
         $this->load->library('form_validation');
         $this->load->helper('form');
     }
     public function postorderTable()
     {

         if ($this->input->post()) {

             $this->form_validation->set_rules('Time', 'Tên món ăn', 'required');
             $this->form_validation->set_rules('phone', 'Tên slide', 'required');
             $this->form_validation->set_rules('calendar', 'Tên slide', 'required');
             $this->form_validation->set_message('people', 'Bạn chưa nhập vào thông tin ');

             if ($this->form_validation->run()) {
                 $c = $this->input->post('people');

                 $data = array(
                     'time' => $this->input->post('Time'),
                     'phone' => $this->input->post('phone'),
                     'calendar' => $this->input->post('calendar'),
                     'people' => $this->input->post('people'),

                 );
                 //them moi vao csdl
                 if ($this->orderTable_model->create($data)) {
                     //tạo ra nội dung thông báo
                     $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                 } else {
                     $this->session->set_flashdata('message', 'Không thêm được');
                 }

                 //chuyen tới trang danh sách
                 redirect(base_url() . 'index.php/frontend/home/index');
             }
             redirect(base_url() . 'index.php/frontend/home/index');
         }



     }

 }