<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pic extends CI_Model{

    function upload()
    {
        if(isset($_FILES['avatar']))
        {
            $taille_maxi = 2000000;
            $taille = filesize($_FILES['avatar']['tmp_name']);
            $dossier = '../assest/img/';
            $fichier = basename($_FILES['avatar']['name']);
            $extensions = array('.png', '.gif', '.jpg', '.jpeg');
            $extension = strrchr($_FILES['avatar']['name'], '.');
            if(!in_array($extension, $extensions))
            {
                $erreur = "Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc";
            }
            if($taille>$taille_maxi)
            {
                $erreur = 'Le fichier est trop gros...';
            }
            if(!isset($erreur))
            {
                $fichier = strtr($fichier,'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ','AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuy');
                $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
                move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier);
            }
            else
            {
                echo $erreur;
            }
        }
    }
    function fichier()
    {
        if(isset($_FILES['avatar']))
        {
            $fichier = basename($_FILES['avatar']['name']);
            $fichier = strtr($fichier,'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ','AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuy');
            $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
            return $fichier;
        }   
    }
	function sending_pic($file_name,$idobject)
    {
		$sentence="insert into picture(idobjet,name) values(%s,'%s')";
		$sql=sprintf($sentence,$idobject,$file_name);
		$this->db->query($sql);
	}	
}
