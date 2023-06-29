<?php
defined('BASEPATH') or exit('No direct script access allowed');	//protection fichier
class Profil extends CI_Controller
{	
	public function __construct(){
        parent::__construct();
		$this->load->view('headerResponsive');
    }
	public function index()
	{
		// $this->load->view('headerResponsive');
	}
	//inscription
	public function sinscrire(){
		$this->load->view('profil/inscription');
	}
	
	public function inscriptionFoyer(){
		$this->load->model('OperationModel');
		$all['all'] = $this->OperationModel->select_gen('emplacement');
		$this->load->view('profil/inscriptionFoyer',$all);
	}
	
	public function confirmerFoyer(){
		$this->load->model('OperationModel');
		$data = array();
		$data['nom']=$this->input->get('nomFoyer');
		$data['idemplacement'] = $this->input->get('idEmplacement');
		$data['motDePasse'] = $this->input->get('mdp');
		// var_dump($data);
		$this->OperationModel->insert_gen('foyer',$data);
		$this->load->view('profil/inscription');
	}
	public function confirmerInscription(){
		$data=array();
		$data['idFoyer'] = $this->input->get('nomFoyer');
		$data['nom'] = $this->input->get('nom');
		$data['prenom'] = $this->input->get('prenom');
		$data['dateDeNaissance'] = $this->input->get('dtn');
		$data['email'] = $this->input->get('email');
		$data['numero'] = $this->input->get('numero');
		$data['motDePasse'] = $this->input->get('motDePasse');
		$this->load->model('ProfilModel');
		// $this->ProfilModel->insertUtilisateur($data);
		$this->load->model('NotificationModel');
		// $this->NotificationModel->insertNotification()
		$this->load->view('profil/inscription');
	}

// se connecter
	public function seconnecter(){
		$this->load->view('profil/connection');
	}
	public function confirmerConnection(){
		$data = array();
		$data['nomFoyer'] = $this->input->get('nomFoyer');
		$data['email'] = $this->input->get('email');
		$data['mdp'] = $this->input->get('mdp');
		// var_dump($data);
		$this->load->model('ProfilModel');
		$utilisateur = $this->ProfilModel->getUtilisateur($data);
		// var_dump($utilisateur);
		$_SESSION['utilisateur'] = $utilisateur;
		redirect('mysession/profil');
	}
// ventes des articles
	public function articles(){
		$this->load->model('ProfilModel');
		$requete = "select * from produitsDeVente join categorie on produitsDeVente.idcategorie = categorie.idcategorie";
		// echo $requete;
		$all['all'] = $this->ProfilModel->get($requete);
		// var_dump($all);
		$this->load->view('ventes/index',$all);
		// $this->load->view('footer');
	}








	//Contact 
	public function aboutus()
	{
		$this->load->view('templates/header');
		$this->load->view('contact/aboutus');
		$this->load->view('templates/footer');
	}
	public function nouscontacter()
	{
		$this->load->view('templates/header');
		$this->load->view('contact/nouscontacter');
		$this->load->view('templates/footer');
	}
	public function servicesclient()
	{
		$this->load->view('templates/header');
		$this->load->view('contact/servicesclient');
		$this->load->view('templates/footer');
	}

	//parametre
	public function vosappareils()
	{
		$this->load->view('templates/header');
		$this->load->view('parametre/vosappareils');
		$this->load->view('templates/footer');
	}
	public function moncompte()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
	}
	//produits
	public function produits()
	{
		$this->load->view('templates/header');
		$this->load->view('produits/produits');
		$this->load->view('templates/footer');
	}
	public function voirproduit($idproduit = '')
	{
		//tokony mameno $data ny mombamomban ny produit (select * from produit where idproduit= )
		$this->load->view('templates/header');
		$this->load->view('produits/voirproduit');
		$this->load->view('templates/footer');
	}
	//ma maison
	public function mamaison()
	{
		$this->load->view('templates/header');
		$this->load->view('mamaison/mamaison');
		$this->load->view('templates/footer');
	}
	public function ajouterpiece($idpiece = '')
	{
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
	}
}
