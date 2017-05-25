<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sights extends CI_Controller {

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
        $this->load->view('sights/sight_nav_bar');
        $this->load->helper('url');
        $this->load->view('footer');
    }

    public function getByRegionId($id){
        $this->load->model('sights_model');
        $result = $this->sights_model->get_sight_by_region_id((int)$id);
        $data = array(
            'sights' => $result
        );

        $this->load->view('head');
        $this->load->view('nav_bar');
        $this->load->view('sights/sight_nav_bar');
        $this->load->view('sights/all_sights', $data);
        $this->load->view('footer');
    }

    public function get()
    {
        $this->load->model('sights_model');
        $result = $this->sights_model->get_all_sights();
        $data = array(
            'sights' => $result
        );

        $this->load->view('head');
        $this->load->view('nav_bar');
        $this->load->view('sights/sight_nav_bar');
        $this->load->view('sights/all_sights', $data);
        $this->load->view('footer');
    }


    public function createSight()
    {
        if(isset($_POST['submit'])){
            $this->load->model('sights_model');
            $data = array(
                "name"=> $_POST["name"],
                "description"=> $_POST["description"],
                "website"=> $_POST["website"],
                "address"=> $_POST["address"],
                "map"=> $_POST["map"],
                "picture"=> $_POST["picture"],
                "region"=> (int)$_POST["region"],
            );
            $result = $this->sights_model->create_sight($data);
            if($result){
                redirect("sights/get");
            }else{
                redirect("sights/create");
            }
        }else{
            $this->load->view('head');
            $this->load->view('nav_bar');
            $this->load->view('sights/sight_nav_bar');
            $this->load->view('sights/create_sights');

            $this->load->view('footer');
        }
    }
    function deleteSight($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('sights');
        redirect('sights');
    }
}
