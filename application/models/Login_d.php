<?php

class Login_d extends MY_Model{

    protected $_table_name='user';
    protected $_order_by='id';
    public    $rules=array(

        'email'=>array(

            'field'=>'email',
            'label'=>'Email',
            'rules'=>'required|valid_email'

        ),

        'password'=>array(

            'field'=>'password',
            'label'=>'Password',
            'rules'=>'trim|required'

        )

    );


    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    function login(){

                $email=$this->input->post('email');
                $password =$this->input->post('password');

        $sql = "SELECT * FROM user WHERE email='$email' AND password ='$password'";
        $query = $this->db->query($sql);
        $rows  = $query->num_rows();


        if ($rows == 1) {

            $data = array(
                'email' => $email,
                'loggedin' => TRUE
            );

            $this->session->set_userdata($data);
            return  true;

        }


    }

    function logout(){

        $this->session->sess_destroy();

    }

    function loggedin(){

        return (bool)$this->session->userdata('loggedin');

    }


    /* function hash($string){
        return hash('md5',$string.config_item('encryption_key'));

    } */
}