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

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }



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
                'passconf' => $_POST['passconf'],
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

    public function createUserForm(){
        $this->load->view('head');
        $this->load->view('nav_bar');
        $this->load->view('users/user_nav_bar');
        $this->load->view('users/create_users');

        $this->load->view('footer');
    }
   public function createUser()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required',   array('required' => 'Error Message on rule2 for this field_name'));
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Password confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('head');
            $this->load->view('nav_bar');
            $this->load->view('users/user_nav_bar');
            $this->load->view('users/create_users');
        }
        else
        {
            $this->load->model('users_model');

            $data = array(
                "username"=> $_POST["username"],
                "password"=> $_POST["password"],
                "passconf"=> $_POST["passconf"],
                "email"=> $_POST["email"],
            );
            $result = $this->users_model->create_user($data);
            if ($result)
            {
                redirect("users/get");
            }
            else
            {
                $this->load->view('head');
                $this->load->view('nav_bar');
                $this->load->view('users/user_nav_bar');
                $this->load->view('users/create_users');
            }
        }
    }
    function deleteUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
        redirect('users');
    }
}
