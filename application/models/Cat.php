<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cat extends CI_Model{

	public function insert($name){
		$sentence="insert into categorie(name) values('%s')";
		$sql=sprintf($sentence,$name);
		$this->db->query($sql);
	}
	public function delete($id){
		$sentence="delete from categorie where idcategorie=%s";
		$sql=sprintf($sentence,$id);
		$this->db->query($sql);
	}

	function get_all_cat(){
		$query=	$this->db->query("select * from categorie");
		$results = $query->Result();
		$list=array();
		foreach ($results as $result) {
			$list[] = $result->idcategorie;
			$list[] = $result->name;
		}
		return $list;
	}
}