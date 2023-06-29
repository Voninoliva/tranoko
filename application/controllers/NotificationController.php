<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class NotificationController extends CI_Controller{
    public function __construct(){
        parent :: __construct();
    }
    public function index(){
        $this->load->model("NotificationModel");
        $all['all']= $this->NotificationModel->getAllNotifForMe(3);
        $this->load->view('essai',$all);
    }
    public function insert(){
        $donnees = array();
        $donnees['idpack'] =3;
        $donnees['idutilisateur'] = 3;
        $donnees['action'] = "une nouvelle personne dans votre foyer";
        $lien = "NotificationController/insert";
        $this->load->model("NotificationModel");
        $this->NotificationModel->insertInNotification($donnees,$lien);
        $this->insert();
    }
    public function qr(){
        // include(site_url("controller/phpqrcode/qrlib.php"));
        // $this->load->library('qrlib');
        require_once APPPATH.'libraries\\qrlib.php';
        $this->load->model("NotificationModel");
        $this->NotificationModel->createMyQrCode("aaaaaaannnnnnt");
    }
}

?>