<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 7/5/2018
 * Time: 2:34 PM
 */
class TableCus extends  MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TableCus_model');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index(){
        $listTable = $this->TableCus_model->get_list();
        $this->data['listTable'] = $listTable;
        $this->data['temp'] = 'Admin/TableCus/list';
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

        $service = $this->TableCus_model->get_info($id);

        if(!$service ){

            $this->session->set_flashdata('message', 'Không tồn tại ');
            redirect(admin_url('TableCus'));

        }
        if($this->input->post()){

            $this->form_validation->set_rules('time', 'Tiêu đề', 'required');
            $this->form_validation->set_rules('phone', 'Mô tả', 'required');
            $this->form_validation->set_rules('calendar', 'Mô tả', 'required');
            $this->form_validation->set_rules('people', 'Mô tả', 'required');
            if($this->form_validation->run())
            {

                $data = array(
                    'time'                        => $this->input->post('time'),
                    'phone'                          => $this->input->post('phone'),
                    'calendar'                      => $this->input->post('calendar'),
                    'people'                       => $this->input->post('people') ,
                );
                //them moi vao csdl
                if($this->TableCus_model->update($service->id,$data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật thành công');
                }else{
                    $this->session->set_flashdata('message', 'Cập nhật thất bại !');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('TableCus'));
            }
        }
        $this->data['service'] = $service;
        $this->data['temp'] = 'Admin/TableCus/edit';
        $this->load->view('admin/layout/master', $this->data);
    }
    public function del(){
        //$id = $this->uri->segment(4);
        $id = $this->uri->rsegment(3);
        $this->_del($id);
        $this->session->set_flashdata('message', 'Xóa  thành công');
        redirect(admin_url('TableCus'));

    }
    public function setStatus(){
      $c = $this->input->post('delcheck');
      if(isset($c)){
          $idcheckdel = $this->input->post('ids');
          if(!$idcheckdel){
              $this->session->set_flashdata('message', 'Vui lòng chọn nội dung cần cập nhật');
              redirect(admin_url('TableCus'));
          }
          foreach ($idcheckdel as $id)
          {
              $this->_del($id);
          }
          redirect(admin_url('TableCus'));
      }

    }
    private function _del($id)
    {
        $service = $this->TableCus_model->get_info($id);

        if(!$service)
        {

            $this->session->set_flashdata('message', 'không tồn tại dữ liệu !');
            redirect(admin_url('OrderTable'));
        }

        $this->TableCus_model->delete($id);


    }
    private function _mutiStatus($id){
        $service = $this->TableCus_model->get_info($id);
        if(!$service)
        {
            $this->session->set_flashdata('message', 'không tồn tại món ăn  này');
            redirect(admin_url('TableCus'));
        }
            $data = array(
                'status' => !$service->status
            );
            $this->TableCus_model->update($id, $data);

        //chuyen tới trang danh sách

    }

}