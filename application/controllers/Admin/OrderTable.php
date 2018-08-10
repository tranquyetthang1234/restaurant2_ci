<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 7/5/2018
 * Time: 2:34 PM
 */
class OrderTable extends  MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('evalCustumer_model');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index(){
        $listOder = $this->evalCustumer_model->get_list();
        $this->data['listOrder'] = $listOder;
        $this->data['temp'] = 'Admin/OrderTable/list';
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
                if($this->evalCustumer_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('OrderTable'));
            }
        }
        $this->data['temp'] = 'Admin/OrderTable/add';
        $this->load->view('admin/layout/master', $this->data);
    }
    public function edit(){
        $id = $this->uri->rsegment(3);
        $service = $this->evalCustumer_model->get_info($id);
        if(!$service ){

            $this->session->set_flashdata('message', 'Không tồn tại ');
            redirect(admin_url('OrderTable'));

        }
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
                if($this->evalCustumer_model->update($service->id,$data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('OrderTable'));
            }
        }
        $this->data['service'] = $service;

        $this->data['temp'] = 'Admin/OrderTable/edit';
        $this->load->view('admin/layout/master', $this->data);
    }
    public function del(){
        //$id = $this->uri->segment(4);
        $id = $this->uri->rsegment(3);
        $this->_del($id);
        $this->session->set_flashdata('message', 'Xóa  thành công');
        redirect(admin_url('OrderTable'));

    }
    public function setStatus(){
      $c = $this->input->post('delcheck');
      if(isset($c)){
          $idcheckdel = $this->input->post('ids');
          if(!$idcheckdel){
              $this->session->set_flashdata('message', 'Vui lòng chọn nội dung cần cập nhật');
              redirect(admin_url('OrderTable'));
          }
          foreach ($idcheckdel as $id)
          {
              $this->_del($id);
          }
          redirect(admin_url('OrderTable'));
      }
       $a = $this->input->post('statuscheck');

        if(isset($a)){
            $idcheckdel = $this->input->post('ids');
            if(!$idcheckdel){
                $this->session->set_flashdata('message', 'Vui lòng chọn nội dung cần cập nhật');
                redirect(admin_url('OrderTable'));
            }
            foreach ($idcheckdel as $id)
            {
                $this->_mutiStatus($id);
            }
            $this->session->set_flashdata('message', 'Cập nhật thành công');
            redirect(admin_url('OrderTable'));
        }
    }
    private function _del($id)
    {
        $service = $this->evalCustumer_model->get_info($id);

        if(!$service)
        {

            $this->session->set_flashdata('message', 'không tồn tại dữ liệu !');
            redirect(admin_url('service'));
        }

        $this->evalCustumer_model->delete($id);


    }
    private function _mutiStatus($id){
        $service = $this->evalCustumer_model->get_info($id);
        if(!$service)
        {
            $this->session->set_flashdata('message', 'không tồn tại món ăn  này');
            redirect(admin_url('OrderTable'));
        }
        $data = array(
            'status'                => !$service->status
        );
        $this->evalCustumer_model->update($id,$data);

        //chuyen tới trang danh sách

    }

}