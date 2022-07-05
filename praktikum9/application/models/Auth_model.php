<?php

class Auth_model extends CI_Model
{
    public function tampil_data(){
        return $this->db->get('users');
    }

    public function input_data($data, $table){
        $this->db->insert($table, $data);
    }
}