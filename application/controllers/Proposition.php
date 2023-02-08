<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proposition extends CI_Controller {
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

    public 	function accueil() {
        $data['title'] = 'Takalo-Takalo';
        $data['description'] = 'Site d echange en ligne ';
        $data['keywords'] = 'Takalo-takalo';
        $data['contents'] = 'proposition';
		$this->load->model('demande');
		$me=$this->session->connected; 
		$data['list_demande']=$this->demande->get_my_demande($me);
		$this->load->model('cat');
		$data['list_cat']=$this->cat->get_all_cat();
        $this->load->view('template',$data);
    }
    public 	function accepter() {
		$at=$this->input->post("at");
		$oa=$this->input->post("oa");
		$ov=$this->input->post("ov");
		$id=$this->input->post("id");
		$this->load->model('demande');
		$this->demande->insert($at,$oa,$ov,$id);
		redirect('welcome/accueil');
    }
    public 	function refuser() {
		$id=$this->input->post("id");
		$this->load->model('demande');
		$this->demande->delete($id);
		redirect('welcome/accueil');
    }
}
