<?php

 class Muser extends  CI_Model{
     public function __construct()
     {
         parent::__construct();
        $this->load->datanase();
     }
     /*public function  lisUser(){
        $this->db->select('av');
        $this->db->where('level',2);
        $query = $this->db->get('user');
        return $query->result_array();
     }*/
     public function insertUser($table,$data_insert){
         $this->db->insert($table,$data_insert);
     }

 }

