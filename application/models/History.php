<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class History extends CI_Model{

	function get_historic(){
		$query=	$this->db->query("select historic.acheteur acheteur,historic.objet_a objet_a,historic.vendeur vendeur,historic.objet_v objet_v,historic.daty daty,m1.name at,o1.name oa,m2.name vt,o2.name ov from historic join membre as m1 on historic.acheteur=m1.idmembre join objet as o1 on historic.objet_a=o1.idobjet join membre as m2 on historic.vendeur=m2.idmembre join objet as o2 on historic.objet_v=o2.idobjet ");
		$results = $query->Result();
		$list=array();
		foreach ($results as $result) {
			$list[] = $result->acheteur;
			$list[] = $result->objet_a;
			$list[] = $result->vendeur;
			$list[] = $result->objet_v;
			$list[] = $result->daty;
			$list[] = $result->at;
			$list[] = $result->oa;
			$list[] = $result->vt;
			$list[] = $result->ov;
		}
		return $list;
	}
}
