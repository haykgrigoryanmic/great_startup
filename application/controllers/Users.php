<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Users extends CI_Controller {




	public function index()
	{
        $this->load->view('head');
        $this->load->view('nav_bar');
        $this->load->view('users/user_nav_bar');
        $this->load->view('footer');
	}

    public function get()
    {
        $this->load->model('users_model');
        $result = $this->users_model->get_all_users();
        $data = array(
            'users' => $result
        );

		$this->load->view('head');
		$this->load->view('nav_bar');
        $this->load->view('users/user_nav_bar');
		$this->load->view('users/all_users', $data);
        $this->load->view('footer');
    }

    public function updateUser($id){
        $this->load->model('users_model');
	    if(isset($_POST['submit'])){
	        $data = array(
	            'username' => $_POST['username'],
	            'email' => $_POST['email'],
	            'password' => $_POST['password'],
            );

	        $result = $this->users_model->update_user($id, $data);
	        if($result){
                redirect("users/get");
            }
        }else{

            $user = $this->users_model->get_user_by_id($id);
            $data = array(
                'user' => $user
            );
            $this->load->view('head');
            $this->load->view('nav_bar');
            $this->load->view('users/user_nav_bar');
            $this->load->view('users/update_users', $data);

            $this->load->view('footer');
        }
    }

    public function deleteUser($id){
	    var_dump("delete user ".$id);
    }
    public function createUser()
    {
        if(isset($_POST['submit'])){
            $this->load->model('users_model');
            $data = array(
                "username"=> $_POST["username"],
                "password"=> $_POST["password"],
                "email"=> $_POST["email"],
            );
            $result = $this->users_model->create_user($data);
            if(!$result){
                redirect("users/get");
            }else{
                redirect("users/create");
            }
        }else{
            $this->load->view('head');
            $this->load->view('nav_bar');
            $this->load->view('users/user_nav_bar');
            $this->load->view('users/create_users');

            $this->load->view('footer');
        }
    }
}
