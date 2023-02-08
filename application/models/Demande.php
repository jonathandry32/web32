<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Demande extends CI_Model{

	function get_my_demande($me){
		$query=	$this->db->query(sprintf("select demande.iddemande,demande.acheteur at,demande.recu rc,demande.donne dn,membre.name as acheteur,obj.name as recu,ob.name as donne from demande join membre on demande.acheteur=membre.idmembre join objet as obj on demande.recu=obj.idobjet join objet as ob on demande.donne=ob.idobjet where vendeur=%s",$me));
		$results = $query->Result();
		$list=array();
		foreach ($results as $result) {
			$list[] = $result->acheteur;
			$list[] = $result->recu;
			$list[] = $result->donne;
			$list[] = $result->iddemande;
			$list[] = $result->at;
			$list[] = $result->rc;
			$list[] = $result->dn;
		}
		return $list;
	}

	function delete($id){
		$query=	$this->db->query(sprintf("delete from demande where iddemande=%s",$id));
		return $list;
	}

	function insert($at,$oa,$ov,$id){
		$vt=$this->session->connected;
		$query=	$this->db->query(sprintf("delete from demande where iddemande=%s",$id));
		$query=	$this->db->query(sprintf("insert into historic(acheteur,objet_a,vendeur,objet_v,daty) values(%s,%s,%s,%s,now());",$at,$oa,$vt,$ov));
		$this->db->query(sprintf("update objet set proprietaire=%s where idobjet=%s",$at,$oa));
		$this->db->query(sprintf("update objet set proprietaire=%s where idobjet=%s",$vt,$ov));
	}
}
