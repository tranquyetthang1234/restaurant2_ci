<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 7/5/2018
 * Time: 12:52 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
 class EvalCustumer extends CI_Controller{
     public function __construct()
     {
         parent::__construct();
         $this->load->model('evalCustumer_model');
         $this->load->library('form_validation');
         $this->load->helper('form');
     }
     public function postContact()
     {

         if ($this->input->post()) {
             $this->form_validation->set_rules('Message', 'Tên slide', 'required');
             $this->form_validation->set_rules('Name', 'Tên món ăn', 'required');
             $this->form_validation->set_rules('Email', 'Tên slide', 'required');
             $this->form_validation->set_rules('Telephone', 'Tên slide', 'required');
             $this->form_validation->set_message('Subject', 'Bạn chưa nhập vào thông tin ');

             if ($this->form_validation->run()) {
                 $c = $this->input->post('people');

                 $data = array(
                     'name' => $this->input->post('Name'),
                     'email' => $this->input->post('Email'),
                     'phone' => $this->input->post('Telephone'),
                     'content' => $this->input->post('Message'),
                     'subject' => $this->input->post('Subject'),

                 );
                 //them moi vao csdl
                 if ($this->evalCustumer_model->create($data)) {
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