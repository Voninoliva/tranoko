<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class NotificationModel extends CI_Model{
    function getAllNotifForMe($idPack){
        $requete = "select * from notification  join utilisateur on notification.idutilisateur=utilisateur.idutilisateur where idPack = %s and dateNotif>=current_date-2 order by dateNotif";
        $requete = sprintf($requete,$this->db->escape($idPack));
        $sql=$this->db->query($requete);
        $re=array();
        foreach($sql->result_array() as $row){
            $re[]=$row;
        }
        $th = array();
        for($i = 0;$i<count($re);$i++){
            $valiny = array();
            $valiny = $re[$i];
            $valiny['note'] = explode(";",$re[$i]['action']);
            $valiny['note'] = $valiny['note'][0];
            $valiny['lien'] = explode(";",$re[$i]['action']);
            $valiny['lien'] =trim($valiny['lien'][1]);
            $th[] = $valiny;
        }
        return $th;
    }
    function insertInNotification($donnees,$lien){
        //eto le lien tsy ao anatin le action
        $this->load->model("OperationModel");
        $donnees['action'] = $donnees['action'].";".$lien;
        $this->OperationModel->insert_gen("notification",$donnees);
    }
    function insertInDisfonctionnement($donnees){
        $this->load->model("OperationModel");
        $this->OperationModel->insert_gen("disfonctionnement",$donnees);
    }
    function createMyQrCode($texte){
        $qrFile = APPPATH.'libraries/sarys/ssh.png';
        echo $qrFile;
        QRcode::png($texte,$qrFile);
        // $this->load->helper('download');
        // force_download($qrFile,NULL);

    }
}
// insert into foyer values(default,default,'tranoko',2);
// insert into pack values(default,default,2);
// insert into utilisateur values(default,'Miora','Oliva','2004-09-09',2,'voinolivam@gmail.com',default,'tranoko',default);
// insert into notification values(default,2,2,'lumiere eteintes dans le couloir;Acceuil/dashboard');
?>