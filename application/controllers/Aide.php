<?php
defined('BASEPATH') or exit('No direct script access allowed');	//protection fichier
class Aide extends CI_Controller
{
    public function __construct(){
        parent::__construct();
		$this->load->view('headerResponsive');
        $this->load->view('help/helpMenu');
    }
    // public function index(){
    //     $this->load->view('help/content');
    // }
    public function com(){
        $all=array();
        $id=$this->input->get('id');
        if($id==0){
            $all['all']='contactez nous au numéro 0000';
        }
        else if($id==1){
            redirect('mysession/inserer');
        }
        $this->load->view('help/content',$all);
    }
    
}