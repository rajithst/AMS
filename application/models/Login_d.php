<?php

class Login_d extends MY_Model{

    protected $_table_name='user';
    protected $_order_by='id';
    public    $rules=array(

        'username'=>array(

            'field'=>'username',
            /*'label'=>'username',*/
            'rules'=>'required'

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

        $username=$this->input->post('username');
        $password =$this->input->post('password');

        $sql = "SELECT * FROM user WHERE user_name='$username' AND password ='$password'";
        $query = $this->db->query($sql);
        $res  = $query->result();
        $rows  = $query->num_rows();

       foreach ($res as $result){
           $u_id = $result->id;
           $ugroup = $result->user_group;
       }

        if ($rows == 1) {
            $this->session->set_userdata(
                array(
                'username'  => $username,
                'usergroup' => $ugroup,
                'loggedin'  => TRUE,
                'user_id'   => $u_id

                ));
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
