<?php

/**
 * Created by PhpStorm.
 * User: rajith
 * Date: 10/11/16
 * Time: 11:55 PM
 */
class User extends Admin_Controller {

    public function __construct(){

        parent::__construct();
        $this->load->model('Login_d');
        $this->load->model('User_data');
    }


    public function login(){

        $dashboard = 'Asset/register';
        if ($this->Login_d->loggedin() == true) {
            redirect($dashboard);
        }

        $rules= $this->Login_d->rules;
        $this->form_validation->set_rules($rules);

        if($this->form_validation->run()==TRUE) {
            if ($this->Login_d->login() == true) {
                redirect($dashboard) ;
            }else {
               echo "
			<script>
							setTimeout(function () {
									swal({   title: \" Access Denied !\",   text: \"Your Username and Password Does not match!\",   type: \"warning\",   showCancelButton: false,   confirmButtonColor: \"#DD6B55\",   confirmButtonText: \"Ok, retry it!\",   closeOnConfirm: true });
							}, 300);
						</script>";
                        //$this->session->set_flashdata('error','That email password combination does not exist');
             }
        }
        $this->load->view('login');
    }

    public function logout(){
        $this->Login_d->logout();
        redirect('admin/User/login');
    }

    public function addUser()
    {
      $this->load->view('user_addUser');
    }

    public function management()
    {
        $data['list'] = $this->User_data->getAllUsers();
        $this->load->view('user_management',$data);
    }

}
