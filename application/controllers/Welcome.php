<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
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
	public function accueil(){
        $data['title'] = 'Takalo-Takalo';
        $data['description'] = 'Site d echange en ligne ';
        $data['keywords'] = 'Takalo-takalo';
        $data['contents'] = 'accueil';
		$this->load->model('objet_modal');
		$me=$this->session->connected; 
		$data['list_objet']=$this->objet_modal->get_their_objet($me); 
		$data['list_my_objet']=$this->objet_modal->get_my_objet($me);  
		$this->load->model('cat');
		$data['list_cat']=$this->cat->get_all_cat();
        $this->load->view('template',$data); 
	}
	public function multiple(){
        $data['title'] = 'Takalo-Takalo';
        $data['description'] = 'Site d echange en ligne ';
        $data['keywords'] = 'Takalo-takalo';
        $data['contents'] = 'multiple';
        $this->load->view('template',$data); 
	}	
	public function search(){
        $data['title'] = 'Takalo-Takalo';
        $data['description'] = 'Site d echange en ligne ';
        $data['keywords'] = 'Takalo-takalo';
        $data['contents'] = 'search';
		$this->load->model('objet_modal');
		$me=$this->session->connected; 
		$mc=$this->input->post("mot_cle");
		$cat=$this->input->post("cat");
		$this->load->model('cat');
		$data['list_cat']=$this->cat->get_all_cat();
		$data['list_objet']=$this->objet_modal->get_search($mc,$cat);
		$data['list_my_objet']=$this->objet_modal->get_my_objet($me);  
        $this->load->view('template',$data); 
	}	
}
