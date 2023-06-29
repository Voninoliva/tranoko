<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class VentesModel extends CI_Model {
    public function acheter($id){
        $this->load->model('ProfilModel');
        $requete ="select * from produitsDeVente where idproduitsdevente=".$id;
        $all = $this->ProfilModel->get($requete);
        // tokony misy oe mandefa any amin ny back oe hisy hividy
        // miantso an ity fonction ity de makany amin ny aide
        return $all;
    }

}