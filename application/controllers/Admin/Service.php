<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 7/4/2018
 * Time: 11:37 PM
 */
class Service extends  MY_Controller{
  
    public function __construct()
    {
        parent::__construct();
        $this->load->model('service_model');
        $this->load->library('form_validation');
        $this->load->helper('form');

    }
    public function index(){
        $service = $this->service_model->get_list();
        $this->data['service'] = $service;
        $this->data['title']  ='Danh sách dịch vụ';
        $this->data['temp'] = 'Admin/service/list';
        $this->load->view('admin/layout/master',$this->data);
    }
    public function add(){
        $this->load->library('upload');
        if($this->input->post()){

            $this->form_validation->set_rules('title', 'Tiêu đề', 'required');
            $this->form_validation->set_rules('content', 'Mô tả', 'required');
            if($this->form_validation->run())
            {

                //lay ten file anh minh hoa duoc update len
               /* $this->load->library('upload_library');
                $upload_path = './uploads/menu';
                $upload_data = $this->upload_library->upload($upload_path, 'image');
                $image_link = '';
                 if(isset($upload_data['imgs']))
                 {
                     $image_link = $upload_data['imgs'];
                 }*/

                //luu du lieu can them
                $data = array(
                    'title'                        => $this->input->post('title'),
                    'img'                          => 'gal5.jpg',
                    'content'                      => $this->input->post('content'),
                    'special'                      => ($this->input->post('s') =='on') ? 1 :0,
                    'status'                       => ($this->input->post('status') == 'on') ? 1 : 0 ,
                );
                //them moi vao csdl
                if($this->service_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('service'));
            }
        }

        $this->data['temp'] = 'Admin/service/add';
        $this->load->view('admin/layout/master', $this->data);
    }
    public function edit(){
        $id = $this->uri->rsegment(3);

        $service = $this->service_model->get_info($id);

        if(!$service ){

            $this->session->set_flashdata('message', 'Không tồn tại ');
            redirect(admin_url('service'));

        }
        $this->data['service'] = $service;
        $this->data['temp'] = 'Admin/service/edit';
        $this->load->view('admin/layout/master', $this->data);
    }
    public function del(){
        //$id = $this->uri->segment(4);
        $id = $this->uri->rsegment(3);
        $this->_del($id);
        $this->session->set_flashdata('message', 'Xóa  thành công');
        redirect(admin_url('service'));

    }
    private function _del($id)
    {
        $service = $this->service_model->get_info($id);

        if(!$service)
        {

            $this->session->set_flashdata('message', 'không tồn tại dữ liệu !');
            redirect(admin_url('service'));
        }

        $this->service_model->delete($id);
        $image_link =  base_url().'template/frontend/images/'.$service->img;
        echo $image_link;
       if(file_exists($image_link))
        {

            unlink($image_link);
        }

    }
}
