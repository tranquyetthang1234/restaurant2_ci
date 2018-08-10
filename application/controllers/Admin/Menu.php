<?php
class Menu extends  MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }
    public function index(){
        $menu_list = $this->menu_model->get_list();
        $this->data['menu_list'] = $menu_list;
        $this->data['temp'] = 'Admin/menu/list';
        $this->load->view('admin/layout/master',$this->data);
    }

    public function add(){
        $this->load->library('upload');
        $this->load->library('upload_library');
        if($this->input->post())
        {

            $this->form_validation->set_rules('name', 'Tên món ăn', 'required');
            $this->form_validation->set_rules('description', 'Tên slide', 'required');
            $this->form_validation->set_rules('price', 'Tên slide', 'required');
            $this->form_validation->set_message('requir ed', 'Bạn chưa nhập vào thông tin ');
            //nhập liệu chính xác
            if($this->form_validation->run())
            {

                //lay ten file anh minh hoa duoc update len

                $upload_path ='./uploads/menu/';
              /* if(!file_exists($upload_path)){
                   $upload_path = mkdir(($upload_path));
               }*/


                $upload_data = $this->upload_library->upload($upload_path, 'imgs');

                $image_link = '';
               if(isset($upload_data['file_name']))
                {
                    $image_link = $upload_data['file_name'];
                   
                }
                   
                //luu du lieu can them
                $data = array(
                    'name'                  => $this->input->post('name'),
                    'img'                   => $image_link,
                    'description'           => $this->input->post('description'),
                    'price'                 => $this->input->post('price'),
                    'type'                  => $this->input->post('smenu'),
                    'status'                => ($this->input->post('status') == 'on') ? 1 : 0 ,
                );
                //them moi vao csdl
                if($this->menu_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('menu'));
            }
        }

        $this->data['temp'] = 'Admin/menu/add';
        $this->load->view('admin/layout/master', $this->data);


    }
    public function edit(){
        $id = $this->uri->rsegment(3);
        $menu = $this->menu_model->get_info($id);

        if(!$menu ){

            $this->session->set_flashdata('message', 'Không tồn tại món ăn này');
            redirect(admin_url('menu'));

        }
        $this->load->library('form_validation');
        $this->load->helper('form');

        if($this->input->post())
        {

            $this->form_validation->set_rules('name', 'Tên món ăn', 'required');
            $this->form_validation->set_rules('description', 'Tên slide', 'required');
            $this->form_validation->set_rules('price', 'Tên slide', 'required');
            $this->form_validation->set_message('required', 'Bạn chưa nhập vào thông tin ');
            //nhập liệu chính xác
            if($this->form_validation->run())
            {

                //lay ten file anh minh hoa duoc update len
                $this->load->library('upload_library');
                $upload_path = './uploads/menu';
                $upload_data = $this->upload_library->upload($upload_path, 'image');
                $image_link = '';
               if(isset($upload_data['imgs']))
                 {
                     $image_link = $upload_data['imgs'];
                 }

                //luu du lieu can them
                $data = array(
                    'name'                  => $this->input->post('name'),
                    'img'                   => $image_link,
                    'description'           => $this->input->post('description'),
                    'price'                 => $this->input->post('price'),
                    'type'                  => $this->input->post('smenu'),
                    'status'                => ($this->input->post('status') == 'on') ? 1 : 0 ,
                );
                //them moi vao csdl
                if($this->menu_model->update($menu->id,$data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Có lỗi xảy ra');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('menu'));
            }
        }

        $this->data['menu_list'] = $menu;
        $this->data['temp'] = 'Admin/menu/edit';
        $this->load->view('admin/layout/master', $this->data);
    }
    public function del(){

        $id = $this->uri->rsegment(3);

        $this->_del($id);
        $this->session->set_flashdata('message', 'Xóa món ăn thành công thành công');
        redirect(admin_url('menu'));

    }
    public function delete_all(){
        $ids = $this->input->post('ids');
        if(!$ids){
            $this->session->set_flashdata('message', 'Vui lòng chọn nội dung cần xóa');
            redirect(admin_url('menu'));
        }
        foreach ($ids as $id)
        {
            $this->_del($id);
        }
        redirect(admin_url('menu'));
    }
    private function _del($id)
    {
        $menu = $this->menu_model->get_info($id);

        if(!$menu)
        {

            $this->session->set_flashdata('message', 'không tồn tại món ăn  này');
            redirect(admin_url('menu'));
        }

        $this->menu_model->delete($id);
        $image_link =  base_url().'template/frontend/images/'.$menu->img;

        if(file_exists($image_link))
        {

            unlink($image_link);
        }

    }

}