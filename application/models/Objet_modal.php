<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Objet_modal extends CI_Model{

	public function insert($idc,$name,$proprio,$prix,$descri){
		$sentence="insert into objet(idcategorie,name,proprietaire,prix,description) values(%s,'%s',%s,%s,'%s')";
		$sql=sprintf($sentence,$idc,$name,$proprio,$prix,$descri);
		$this->db->query($sql);
	}
	public function update($name,$proprio,$prix,$id,$descri){
		$this->db->query(sprintf("update objet set name='%s' where idobjet=%s",$name,$id));
		$this->db->query(sprintf("update objet set proprietaire='%s' where idobjet=%s",$proprio,$id));
		$this->db->query(sprintf("update objet set prix='%s' where idobjet=%s",$prix,$id));
		$this->db->query(sprintf("update objet set description='%s' where idobjet=%s",$descri,$id));
	}
	public function delete($id){
		$sentence="delete from object where id=%i";
		$sql=sprintf($sentence,$id);
		$this->db->query($sql);
	}

	function get_all_objet(){
		$query=	$this->db->query("select objet.idobjet id,categorie.name namecat,objet.name nameobj,membre.name namembr,objet.prix pr ,objet.description descri from objet join membre on objet.proprietaire=membre.idmembre join categorie on objet.idcategorie=categorie.idcategorie order by id");
		$results = $query->Result();
		$list=array();
		foreach ($results as $result) {
			$list[] = $result->id;
			$list[] = $result->namecat;
			$list[] = $result->nameobj;
			$list[] = $result->namembr;
			$list[] = $result->pr;
			$list[] = $result->descri;
		}
		return $list;
	}
	function get_search($mot_cle,$cat){
		if ($cat!="all") {
			$query=	$this->db->query("select idobjet id from objet where description like '%".$mot_cle."%' and objet.idcategorie=".$cat);
		}
		else{
			$query=	$this->db->query("select idobjet id from objet where description like '%".$mot_cle."%'");
		}
		$results = $query->Result();
		$lista=array();
		foreach ($results as $result) {
			$lista[] = $result->id;
		}
		$list=array();
		for ($j=0; $j < count($lista); $j++) { 
			$query=	$this->db->query(sprintf("select objet.idobjet id,categorie.name namecat,objet.name nameobj,membre.name namembr,objet.prix pr,objet.description descri from objet join membre on objet.proprietaire=membre.idmembre join categorie on objet.idcategorie=categorie.idcategorie where idobjet=%s",$lista[$j]));
			$results = $query->Result();
			foreach ($results as $result) {
				$list[] = $result->id;
				$list[] = $result->namecat;
				$list[] = $result->nameobj;
				$list[] = $result->namembr;
				$list[] = $result->pr;
				$list[] = $result->descri;
		        $quer= $this->db->query(sprintf("select * from picture where idobjet=%s",$result->id));
		        $resul = $quer->Result();
		        $pic=NULL;
		        foreach ($resul as $resu) {
		            $pic = $resu->name;
		        }

				$list[] = $pic;
			}
		}
		return $list;
	}
	function get_my_objet($me){
		$query=	$this->db->query(sprintf("select objet.idobjet id,categorie.name namecat,objet.name nameobj,membre.name namembr,objet.prix pr,objet.description descri from objet join membre on objet.proprietaire=membre.idmembre join categorie on objet.idcategorie=categorie.idcategorie where objet.proprietaire=%s",$me));
		$results = $query->Result();
		$list=array();
		foreach ($results as $result) {
			$list[] = $result->id;
			$list[] = $result->namecat;
			$list[] = $result->nameobj;
			$list[] = $result->namembr;
			$list[] = $result->pr;
			$list[] = $result->descri;

	        $quer= $this->db->query(sprintf("select * from picture where idobjet=%s",$result->id));
	        $resul = $quer->Result();
	        $pic=NULL;
	        foreach ($resul as $resu) {
	            $pic = $resu->name;
	        }

			$list[] = $pic;
		}
		return $list;
	}
	function get_their_objet($me){
		$query=	$this->db->query(sprintf("select objet.idobjet id,categorie.name namecat,objet.name nameobj,membre.name namembr,objet.prix pr,objet.description descri from objet join membre on objet.proprietaire=membre.idmembre join categorie on objet.idcategorie=categorie.idcategorie where objet.proprietaire!=%s",$me));
		$results = $query->Result();
		$list=array();
		foreach ($results as $result) {
			$list[] = $result->id;
			$list[] = $result->namecat;
			$list[] = $result->nameobj;
			$list[] = $result->namembr;
			$list[] = $result->pr;
			$list[] = $result->descri;

	        $quer= $this->db->query(sprintf("select * from picture where idobjet=%s",$result->id));
	        $resul = $quer->Result();
	        $pic=NULL;
	        foreach ($resul as $resu) {
	            $pic = $resu->name;
	        }

			$list[] = $pic;

		}
		return $list;
	}

	function get_objet_by_id($id){
		$query=	$this->db->query(sprintf("select objet.idobjet id,categorie.name namecat,objet.name nameobj,membre.name namembr,objet.prix pr,objet.description descri from objet join membre on objet.proprietaire=membre.idmembre join categorie on objet.idcategorie=categorie.idcategorie where idobjet=%s",$id));
		$results = $query->Result();
		$list=array();
		foreach ($results as $result) {
			$list[] = $result->id;
			$list[] = $result->namecat;
			$list[] = $result->nameobj;
			$list[] = $result->namembr;
			$list[] = $result->pr;
			$list[] = $result->descri;
		}
		return $list;
	}
	function change($offre,$id){
		$query=	$this->db->query(sprintf("select * from objet where idobjet=%s",$offre));
		$results = $query->Result();
		$a=array();
		foreach ($results as $result) {
			$a[] = $result->idobjet;
			$a[] = $result->proprietaire;
		}$query=	$this->db->query(sprintf("select * from objet where idobjet=%s",$id));
		$results = $query->Result();
		$b=array();
		foreach ($results as $result) {
			$b[] = $result->idobjet;
			$b[] = $result->proprietaire;
		}
		$sentence="insert into demande(acheteur,donne,vendeur,recu) values(%s,%s,%s,%s)";
		$sql=sprintf($sentence,$b[1],$b[0],$a[1],$a[0]);
		$this->db->query($sql);
	}
	function change_m($offre,$id){
		$query=	$this->db->query(sprintf("select * from objet where idobjet=%s",$offre));
		$results = $query->Result();
		$a=array();
		foreach ($results as $result) {
			$a[] = $result->idobjet;
			$a[] = $result->proprietaire;
		}
		$sentence="insert into multiple(acheteur,vendeur,recu) values(%s,%s,%s)";
		$sql=sprintf($sentence,$this->session->connected,$a[0],$a[1]);
		$this->db->query($sql);
		$query=	$this->db->query(sprintf("select idmultiple from multiple where acheteur=%s and vendeur=%s and recu=%s",$this->session->connected,$a[1],$a[0]));
		$results = $query->Result();
		$mul=null;
		foreach ($results as $result) {
			$mul = $result->idmultiple;
		}
		for ($i=0; $i < count($id); $i++) { 
			$this->db->query(sprintf("insert into detail_multiple(idmultiple,donne) values(%s,%s)",$mul,$id[$i]));
		}
	}

	function get_estimation($idobjet,$value){
		$obj_id=$this->get_objet_by_id($idobjet);
		$min=($obj_id[4]*(100-$value))/100;
		$max=($obj_id[4]*(100+$value))/100;
		$me=$this->session->connected;
		$query=	$this->db->query(sprintf("select objet.idobjet id,categorie.name namecat,objet.name nameobj,membre.name namembr,objet.prix pr,objet.description descri from objet join membre on objet.proprietaire=membre.idmembre join categorie on objet.idcategorie=categorie.idcategorie where objet.prix>%s and objet.prix<%s and objet.proprietaire!=%s",$min,$max,$me));
			$results = $query->Result();
			
		$list=array();
		foreach ($results as $result) {
			$list[] = $result->id;
			$list[] = $result->namecat;
			$list[] = $result->nameobj;
			$list[] = $result->namembr;
			$list[] = $result->pr;
			$list[] = $result->descri;

	        $quer= $this->db->query(sprintf("select * from picture where idobjet=%s",$result->id));
	        $resul = $quer->Result();
	        $pic=NULL;
	        foreach ($resul as $resu) {
	            $pic = $resu->name;
	        }
			$list[] = $pic;
		}
		return $list;
	}
}
