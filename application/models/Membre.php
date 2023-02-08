<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Membre extends CI_Model{

	public function check_connexion($user,$mdp){
		$user_valid=false;
		$sentence="select * from membre where email='%s' and password='%s' ";
		$sql=sprintf($sentence,$user,$mdp);
		$query=	$this->db->query($sql);
		$results = $query->Result();
		foreach ($results as $result) {
			$user_valid=true;
			$this->session->unset_userdata('error_login');
			$this->session->set_userdata('connected',$result->idmembre);
			return true;
		}
		if ($user_valid==false) {
			$this->session->set_userdata('error_login','Verifier vos informations');
			return false;
		}
	}

	public function sign_up($email,$password,$name,$numero){
		$sentence="insert into membre(email,password,name,numero,admin) values('%s','%s','%s','%s',0)";
		$sql=sprintf($sentence,$email,$password,$name,$numero);
		$this->db->query($sql);
		$this->session->set_userdata('error_login','Bienvenu, connectez-vous');
	}

	public function get_all_membre(){
		$query=	$this->db->query("select * from membre");
		$results = $query->Result();
		$list=array();
		foreach ($results as $result) {
			$list[]=$result->idmembre;
			$list[]=$result->name;
			$list[]=$result->numero;
		}
		return $list;
	}
	public function nb_membre(){
		$query=	$this->db->query("select count(*) total from membre");
		$results = $query->Result();
		$list=0;
		foreach ($results as $result) {
			$list=$result->total;
		}
		return $list;
	}
	public function nb_trade(){
		$query=	$this->db->query("select count(*) total from historic");
		$results = $query->Result();
		$list=0;
		foreach ($results as $result) {
			$list=$result->total;
		}
		return $list;
	}
}