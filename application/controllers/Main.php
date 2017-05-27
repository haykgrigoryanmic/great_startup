<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
    }

	public function index()
	{
        $this->load->view('head');
		$this->load->view('nav_bar');
        $this->load->view('content');
        $this->load->view('footer');
	}

	public function upload_form(){


        $this->load->view('head');
        $this->load->view('nav_bar');
        $this->load->view('upload/upload_form', array('error' => ' ' ));
        $this->load->view('footer');
        $this->load->helper('url');
    }

    public function do_upload()
    {
        $config['upload_path']          = './public/images';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);



        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('head');
            $this->load->view('nav_bar');
            $this->load->view('upload/upload_form', $error);
            $this->load->view('footer');
            $this->load->helper('url');
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('head');
            $this->load->view('nav_bar');
            $this->load->view('upload/upload_success', $data);
            $this->load->view('footer');
            $this->load->helper('url');
        }
    }
}
