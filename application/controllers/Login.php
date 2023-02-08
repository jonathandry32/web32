<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index(){
        $data['title'] = 'Takalo-Takalo';
        $data['description'] = 'Site d echange en ligne ';
        $data['keywords'] = 'Takalo-takalo';
        $this->load->view('login',$data); 
	}

	public function check(){
		$user=$this->input->post("username");
		$mdp=$this->input->post("password");
		$this->load->model('membre');
		if ($this->membre->check_connexion($user,$mdp)==true) {
			redirect('welcome/accueil');
		}
		else{
			redirect('login');
		}
	}

	public function sign(){
        $data['title'] = 'Takalo-Takalo';
        $data['description'] = 'Site d echange en ligne ';
        $data['keywords'] = 'Takalo-takalo';
        $this->load->view('sign',$data); 
	}
	
	public function sign_up(){
		$email=$this->input->post("email");
		$password=$this->input->post("password");
		$name=$this->input->post("name");
		$numero=$this->input->post("numero");
		$this->load->model('membre');
		$this->membre->sign_up($email,$password,$name,$numero);
		redirect('login');
	}

	public function logout(){
		$this->session->unset_userdata('connected');
		$this->session->unset_userdata('admin');
		$this->session->unset_userdata('error_login');
		redirect('login');
	}
}
