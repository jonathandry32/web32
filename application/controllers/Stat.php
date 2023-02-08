<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stat extends CI_Controller {
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
        $data['contents'] = 'Stat';
		$this->load->model('membre');
		$data['list_membre']=$this->membre->get_all_membre();
		$data['total']=$this->membre->nb_membre();
		$data['historic']=$this->membre->nb_trade();
		$this->load->model('cat');
		$data['list_cat']=$this->cat->get_all_cat();
        $this->load->view('template',$data);
	}
	public function historic(){
        $data['title'] = 'Takalo-Takalo';
        $data['description'] = 'Site d echange en ligne ';
        $data['keywords'] = 'Takalo-takalo';
        $data['contents'] = 'historic';
		$this->load->model('history');
		$this->load->model('cat');
		$data['list_cat']=$this->cat->get_all_cat();
		$data['list_historic']=$this->history->get_historic();
        $this->load->view('template',$data);
	}	
}
