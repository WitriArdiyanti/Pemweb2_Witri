<?php 
    
class Auth extends CI_Controller
{  
    public function index(){
        $this->load->view('login');
    }


    public function login(){
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data = array(
            `username` => $username,
            `email` => $email,
            `password` => $password,

        );

        $this->Auth_model->input_data($data, 'users');
    }
}


?>