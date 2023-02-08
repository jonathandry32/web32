<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Controller {
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

	public function index(){
        $data['title'] = 'Takalo-Takalo';
        $data['description'] = 'Site d echange en ligne ';
        $data['keywords'] = 'Takalo-takalo';
        $data['contents'] = 'categories';  
		$this->load->model('cat');
		$data['list_cat']=$this->cat->get_all_cat();
        $this->load->view('template',$data); 
	}

	public function delete(){  
		$id=$this->input->post("id");
		$this->load->model('cat');
		$this->cat->delete($id);
		redirect('welcome/accueil');
	}

	public function insert(){  
		$name=$this->input->post("name");
		$this->load->model('cat');
		$this->cat->insert($name);
		redirect('welcome/accueil');
	}
}
