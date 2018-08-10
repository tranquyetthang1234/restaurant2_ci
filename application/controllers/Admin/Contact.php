<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 7/5/2018
 * Time: 2:34 PM
 */
class Contact extends  MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contact_model');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index(){
        $listTable = $this->Contact_model->get_list();
        $this->data['listTable'] = $listTable;
        $this->data['temp'] = 'Admin/Contact/list';
        $this->load->view('admin/layout/master',$this->data);
    }
    public function add(){
        $this->load->library('upload');
        if($this->input->post()){
            $this->form_validation->set_rules('name', 'Tiêu đề', 'required');
            $this->form_validation->set_rules('job', 'Mô tả', 'required');
            $this->form_validation->set_rules('content', 'Mô tả', 'required');
            if($this->form_validation->run())
            {

                $data = array(
                    'name'                        => $this->input->post('name'),
                    'job'                          => $this->input->post('job'),
                    'content'                      => $this->input->post('content'),
                    'status'                       => ($this->input->post('status') == 'on') ? 1 : 0 ,
                );
                //them moi vao csdl
                if($this->Contact_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('Contact'));
            }
        }
        $this->data['temp'] = 'Admin/OrderTable/add';
        $this->load->view('admin/layout/master', $this->data);
    }
    public function edit(){
        $id = $this->uri->rsegment(3);

        $service = $this->Contact_model->get_info($id);

        if(!$service ){

            $this->session->set_flashdata('message', 'Không tồn tại ');
            redirect(admin_url('Contact'));

        }
        if($this->input->post()){

            $this->form_validation->set_rules('name', 'Tiêu đề', 'required');
            $this->form_validation->set_rules('subject', 'Mô tả', 'required');
            $this->form_validation->set_rules('email', 'Mô tả', 'required');
            $this->form_validation->set_rules('phone', 'Mô tả', 'required');
            $this->form_validation->set_rules('content', 'Mô tả', 'required');
            if($this->form_validation->run())
            {

                $data = array(
                    'name'                              => $this->input->post('name'),
                    'subject'                           => $this->input->post('subject'),
                    'email'                             => $this->input->post('email'),
                    'phone'                             => $this->input->post('phone') ,
                    'content'                           => $this->input->post('content')
                );
                //them moi vao csdl
                if($this->Contact_model->update($service->id,$data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật thành công');
                }else{
                    $this->session->set_flashdata('message', 'Cập nhật thất bại !');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('Contact'));
            }
        }
        $this->data['service'] = $service;
        $this->data['temp'] = 'Admin/Contact/edit';
        $this->load->view('admin/layout/master', $this->data);
    }
    public function del(){
        //$id = $this->uri->segment(4);
        $id = $this->uri->rsegment(3);
        $this->_del($id);
        $this->session->set_flashdata('message', 'Xóa  thành công');
        redirect(admin_url('Contact'));

    }
    public function setStatus(){
      $c = $this->input->post('delcheck');
      if(isset($c)){
          $idcheckdel = $this->input->post('ids');
          if(!$idcheckdel){
              $this->session->set_flashdata('message', 'Vui lòng chọn nội dung cần cập nhật');
              redirect(admin_url('Contact'));
          }
          foreach ($idcheckdel as $id)
          {
              $this->_del($id);
          }
          redirect(admin_url('Contact'));
      }

    }
    private function _del($id)
    {
        $service = $this->Contact_model->get_info($id);

        if(!$service)
        {
            $this->session->set_flashdata('message', 'không tồn tại dữ liệu !');
            redirect(admin_url('Contact'));
        }

        $this->Contact_model->delete($id);


    }
    private function _mutiStatus($id){
        $service = $this->Contact_model->get_info($id);
        if(!$service)
        {
            $this->session->set_flashdata('message', 'không tồn tại món ăn  này');
            redirect(admin_url('Contact'));
        }
            $data = array(
                'status' => !$service->status
            );
            $this->Contact_model->update($id, $data);

        //chuyen tới trang danh sách

    }

}