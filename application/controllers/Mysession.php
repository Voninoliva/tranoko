<?php 
defined('BASEPATH') or exit('No direct script access allowed');	//protection fichier
class Mysession extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if($this->session->has_userdata('utilisateur') == false) 
        {
            redirect('profil/seconnecter');
        }
        $this->load->view('headerResponsive');
    }
	public function profil(){
        $all['all'] = $_SESSION['utilisateur'];
        // var_dump($all);
        $this->load->view('profil/monprofil',$all);
    }
    public function logout(){
        // $_SESSION['utilisateur']; le destroy tsy tadidiko
        unset($_SESSION['utilisateur']);
        redirect('mysession/profil');
    }
    public function acheter(){
        $id=$this->input->get('id');
        $this->load->model('ProfilModel');
		$this->load->model('VentesModel');
        var_dump($this->VentesModel->acheter($id));
        redirect('aide/com/id/0');
    }
    public function mesappareils(){
        $id=$_SESSION['utilisateur']['idutilisateur'];
        $this->load->model('ProfilModel');
        $all=array();
        $all['all']=$this->ProfilModel->getAllProduits($id);
        // var_dump($all['all']);
        $this->load->view('profil/appareils',$all);
    }
    public function inserer(){
        $id=$_SESSION['utilisateur']['idutilisateur'];
        $this->load->model('ProfilModel');
        $all=array();
        $all['all']=$this->ProfilModel->getAllProduits($id);
        $this->load->view('help/helpMenu');
        $this->load->view('help/insert',$all);
        
    }
    public function disfonc(){
        $data=array();
        $foyer=$this->input->get('nomFoyer');
        $this->load->model('ProfilModel');
        $e=$this->ProfilModel->getSonFoyer($foyer);
        $data['idfoyer'] = $e['idfoyer'];
        $data['idproduit'] = $this->input->get('idproduit');
        if($data['idproduit']=='*'){
            $data['idproduit']=null;
        }
        $data['note']=$this->input->get('textes');
        $this->load->model('OperationModel');
        $id=$_SESSION['utilisateur']['idutilisateur'];
        $data['idutilisateur'] = $id;
        // var_dump($data);
        $this->OperationModel->insert_gen('disfonctionnement',$data);
        $this->load->view('help/confirmation');
    }
    public function turnon(){
        $this->load->model('ProfilModel');
        $this->ProfilModel->turnOn($this->input->get('id'));
        redirect('mysession/mesappareils');
    }
    public function turnoffrequest(){
       $id['id'] = $this->input->get('id');
        $this->load->view('profil/changement',$id); 
    }
    public function turnoff(){
        $data=array();
        $data['idproduit']= $this->input->get('idproduit');
        $data['datedebut']= $this->input->get('datedebut');
        $data['datefin']=$this->input->get('datefin');
        $this->load->model('OperationModel');
        // $this->OperationModel->insert_gen('produitonoff',$data);
        // redirect('mysession/mesappareils');
    }
}
?>