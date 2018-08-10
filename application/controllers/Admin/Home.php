<?php

class Home extends  MY_Controller{

    public function index(){

        $this->data['temp'] = 'Admin/menu/list';
        $this->data['listMenu'] =
        $this->load->view('admin/layout/master',$this->data);

    }
}