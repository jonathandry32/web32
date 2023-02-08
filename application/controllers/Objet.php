<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objet extends CI_Controller {
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

	public function add(){
        $data['title'] = 'Takalo-Takalo';
        $data['description'] = 'Site d echange en ligne ';
        $data['keywords'] = 'Takalo-takalo';
        $data['contents'] = 'insert_object';  
		$this->load->model('membre');
		$data['list_membre']=$this->membre->get_all_membre();
		$this->load->model('cat');
		$data['list_cat']=$this->cat->get_all_cat();
        $this->load->view('template',$data); 
	}

	public function edit_page(){
		$id=$this->input->post("idedit");
		$this->load->model('objet_modal');
		$this->load->model('membre');
        $data['title'] = 'Takalo-Takalo';
        $data['description'] = 'Site d echange en ligne ';
        $data['keywords'] = 'Takalo-takalo';
        $data['contents'] = 'edit_object';  
		$data['list_membre']=$this->membre->get_all_membre();
		$this->load->model('cat');
		$data['list_cat']=$this->cat->get_all_cat();
		$data['obj_def']=$this->objet_modal->get_objet_by_id($id);
        $this->load->view('template',$data); 
	}

	public function all(){
        $data['title'] = 'Takalo-Takalo';
        $data['description'] = 'Site d echange en ligne ';
        $data['keywords'] = 'Takalo-takalo';
        $data['contents'] = 'list_object';  
		$this->load->model('objet_modal');
		$data['list_objet']=$this->objet_modal->get_my_objet($this->session->connected);
		$this->load->model('cat');
		$data['list_cat']=$this->cat->get_all_cat();
        $this->load->view('template',$data); 
	}

	public function estimation($valeur,$prix=0){
        $data['title'] = 'Takalo-Takalo';
        $data['description'] = 'Site d echange en ligne ';
        $data['keywords'] = 'Takalo-takalo';
        $data['contents'] = 'list_estim';  
		$this->load->model('objet_modal');
		$v=$this->input->post($valeur);
		$data['list_objet']=$this->objet_modal->get_estimation($v,$valeur);
		$me=$this->session->connected; 
		$data['list_my_objet']=$this->objet_modal->get_my_objet($me);  
		$this->load->model('cat');
		$data['list_cat']=$this->cat->get_all_cat();
		$data['pri']=$prix;
        $this->load->view('template',$data); 
	}
	public function my_all(){
        $data['title'] = 'Takalo-Takalo';
        $data['description'] = 'Site d echange en ligne ';
        $data['keywords'] = 'Takalo-takalo';
        $data['contents'] = 'estimation';  
		$this->load->model('objet_modal');
		$data['list_objet']=$this->objet_modal->get_my_objet($this->session->connected);
		$this->load->model('cat');
		$data['list_cat']=$this->cat->get_all_cat();
        $this->load->view('template',$data); 
	}

	public function all_admin(){
        $data['title'] = 'Takalo-Takalo';
        $data['description'] = 'Site d echange en ligne ';
        $data['keywords'] = 'Takalo-takalo';
        $data['contents'] = 'list_object_all';  
		$this->load->model('objet_modal');
		$data['list_objet']=$this->objet_modal->get_all_objet();
		$this->load->model('cat');
		$data['list_cat']=$this->cat->get_all_cat();
        $this->load->view('template',$data); 
	}

	public function delete(){  
		$id=$this->input->post("id");
		$this->load->model('objet_modal');
		$this->objet_modal->delete($id);
		redirect('welcome/accueil');
	}

	public function insert(){  
		$idc=$this->input->post("idc");
		$descri=$this->input->post("descri");
		$name=$this->input->post("name");
		$proprio=$this->session->connected;
		$prix=$this->input->post("prix");
		$this->load->model('objet_modal');
		$this->objet_modal->insert($idc,$name,$proprio,$prix,$descri);
		redirect('welcome/accueil');
	}
	public function update(){  
		$id=$this->input->post("id");
		$name=$this->input->post("name");
		$proprio=$this->session->connected;
		$prix=$this->input->post("prix");
		$descri=$this->input->post("descri");
		$this->load->model('objet_modal');
		$this->objet_modal->update($name,$proprio,$prix,$id,$descri);
		redirect('welcome/accueil');
	}
	public function echange(){  
		$offre=$this->input->post("son");
		$id=$this->input->post("mon");
		$this->load->model('objet_modal');
		$this->objet_modal->change($offre,$id);
		redirect('welcome/accueil');
	}
	public function echange_m(){  
		$offre=$this->input->post("son");
		$id=explode(',',$this->input->post("mon"));
		$this->load->model('objet_modal');
		$this->objet_modal->change_m($offre,$id);
		redirect('welcome/accueil');
	}
}
