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

                //$this->session->set_flashdata('error','That email password combination does not exist');
                //redirect('admin/User/login','refresh'); ?>

                <script>
                    swal("Here's a message!", "It's pretty, isn't it?")

                </script>
            <?php }

        }

        $this->load->view('login');
    }



    public function logout(){

        $this->Login_d->logout();
        redirect('admin/User/login');

    }
}