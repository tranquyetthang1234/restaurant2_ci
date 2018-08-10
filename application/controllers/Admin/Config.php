<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 7/5/2018
 * Time: 2:34 PM
 */
class Config extends  MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Config_model');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index(){
        $listTable = $this->Config_model->get_list();
        $this->data['listTable'] = $listTable;

        $this->data['temp'] = 'Admin/Config/edit';
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

        $service = $this->Config_model->get_info($id);

        if(!$service ){

            $this->session->set_flashdata('message', 'Không tồn tại ');
            redirect(admin_url('Config'));

        }

        if($this->input->post()){

            $this->form_validation->set_rules('address', 'Tiêu đề', 'required');
            $this->form_validation->set_rules('email', 'Mô tả', 'required');
            $this->form_validation->set_rules('facebook', 'Mô tả', 'required');
            $this->form_validation->set_rules('gplus', 'Mô tả', 'required');
            $this->form_validation->set_rules('tw', 'Tiêu đề', 'required');
            $this->form_validation->set_rules('zala', 'Mô tả', 'required');
            $this->form_validation->set_rules('history_top', 'Mô tả', 'required');
            $this->form_validation->set_rules('left', 'Mô tả', 'required');
            $this->form_validation->set_rules('right', 'Tiêu đề', 'required');
            $this->form_validation->set_rules('phone', 'Mô tả', 'required');
            $this->form_validation->set_rules('time_work', 'Mô tả', 'required');
            $this->form_validation->set_rules('name', 'Mô tả', 'required');
            $this->form_validation->set_rules('history_bottom', 'Tiêu đề', 'required');
            $this->form_validation->set_rules('youtube', 'Mô tả', 'required');
            $this->form_validation->set_rules('ip', 'Mô tả', 'required');
            $this->form_validation->set_rules('updated_at', 'Mô tả', 'required');
            $this->form_validation->set_rules('map', 'Mô tả', 'required');

            if($this->form_validation->run())
            {

                $data = array(
                    'address'                        => $this->input->post('address'),
                    'email'                          => $this->input->post('email'),
                    'facebook'                      => $this->input->post('facebook'),
                    'gplus'                       => $this->input->post('gplus') ,
                    'tw'                        => $this->input->post('tw'),
                    'zala'                          => $this->input->post('zala'),
                    'history_top'                      => $this->input->post('history_top'),
                    'left'                       => $this->input->post('left') ,
                    'right'                        => $this->input->post('right'),
                    'phone'                          => $this->input->post('phone'),
                    'time_work'                      => $this->input->post('time_work'),
                    'name'                       => $this->input->post('name') ,
                    'history_bottom'                        => $this->input->post('history_bottom'),
                    'youtube'                          => $this->input->post('youtube'),
                    'ip'                      => $this->input->post('ip'),
                    'updated_at'                       => $this->input->post('updated_at') ,
                    'map'                          => $this->input->post('map'),

                );

                //them moi vao csdl
                if($this->Config_model->update($service->id,$data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật thành công');
                }else{
                    $this->session->set_flashdata('message', 'Cập nhật thất bại !');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('Config'));
            }
        }
        redirect(admin_url('Config'));
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