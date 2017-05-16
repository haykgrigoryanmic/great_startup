<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

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
        var_dump("update user ".$id);
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
