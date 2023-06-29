<?php 
defined('BASEPATH') or exit('No direct script access allowed');	//protection fichier
class Analyse extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if($this->session->has_userdata('utilisateur') == false) 
        {
            redirect('profil/seconnecter');
        }
        $this->load->view('headerResponsive');
    }
    public function getConsommationJourParProduit(){
        $idproduit=$this->input->get('idproduit');
        $idutilisateur = $_SESSION['utilisateur']['idutilisateur'];
        $requete="select * from consommationJour where idproduit=".$idproduit;

        $id=$_SESSION['utilisateur']['idutilisateur'];
        $this->load->model('ProfilModel');
        $all=array();
        $e=$this->ProfilModel->getAllProduits($id);
        $all['allproduits']=$e['allapp'];

        $all['all'] = $this->ProfilModel->get($requete);
        $this->load->view('profil/consommation',$all);
        // var_dump($all);
    }
    public function consommationGen(){
        $this->load->model('ProfilModel');
        $idutilisateur = $_SESSION['utilisateur']['idutilisateur'];

        $id=$_SESSION['utilisateur']['idutilisateur'];
        $this->load->model('ProfilModel');
        $all=array();
        $e=$this->ProfilModel->getAllProduits($id);
        $all['allproduits']=$e['allapp'];

        $all['all'] = $this->ProfilModel->getConsommationGen($idutilisateur);
        // var_dump($all);
        $this->load->view('profil/consommation',$all);
    }
    public function consommationMonth(){
        $month=$this->input->get('mois');
        $annee=$this->input->get('annee');
        $req="select * from consommationJour where extract(month from jour)=".$month." and extract(year from jour)=".$annee;
        $this->load->model('ProfilModel');
        $all=array();
        $e=$this->ProfilModel->get($req);
        $all['all']=$e;
        var_dump($all);
    }


}
?>