<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class ProfilModel extends CI_Model {
    public function get($requete){
        $sql=$this->db->query($requete);
        $re=array();
        foreach($sql->result_array() as $row){
            $re[]=$row;
        }
        return $re;
    }
    public function getSonFoyer($nomFoyer){
        $requete = "select * from foyer where nom ilike '%".$nomFoyer."%'";
        $re=$this->get($requete);
        return $re[0];
    }
    // le amin le vo insert foyer de tokony ho samihafa daoly ny nom foyer an olona ie ra tsy 0 ny getSonFoyer de mila ovaina le nomFoyer
    public function insertUtilisateur($data){
        $foyer = $this->getSonFoyer($data['idFoyer']);
        if($foyer!=null){
            $this->load->model('OperationModel');
            $data['idFoyer'] = $foyer->idFoyer;
            $this->OperationModel->insert_gen('utilisateur',$data);
        }
        else{
            return 'Foyer inexistant';
        }
    }
    public function getUtilisateur($data){
        $req = "select utilisateur.*,foyer.nom  as nomFoyer from utilisateur join foyer  on utilisateur.idFoyer = foyer.idFoyer where foyer.nom ilike '%".$data['nomFoyer']."%' and utilisateur.email ilike '%".$data['email']."%' and utilisateur.motDePasse='".$data['mdp']."'";
        echo $req;
        $e=$this->get($req);
        // var_dump($e[0]);
        return $e[0];
    }
    public function getAllProduits($idutilisateur){
        $requete="select * from pack";
        $join0=" join utilisateur on pack.idfoyer=utilisateur.idfoyer ";
        $join1=" join produit on pack.idpack=produit.idpack";
        $where=" where utilisateur.idutilisateur=".$idutilisateur;
        $req=$requete.$join0.$join1.$where;
        $all=array();
        $all['allapp']=$this->get($req);
        $ash=array();
        for($i=0;$i<count($all['allapp']);$i++){
            $sql="select * from produitonoff join produit on produitonoff.idproduit=produit.idproduit where produitonoff.datefin>=current_timestamp and produit.idproduit=".$all['allapp'][$i]['idproduit'];
            // echo $sql;
            $u=$this->get($sql);
            if(count($u)==0){
                $ash[]='on';
            }
            else{
                $ash[]='off';
            }
        }
        $all['detail']=$ash;
        return $all;
    }
    public function turnOn($idproduit){
        $req="update produitonoff set datefin=current_timestamp where idproduit=".$idproduit;
        echo $req;
        // le fonction update taloha
        // le fonction an Balita le tena izy amzay
    }
    public function getHisFoyer($idu){
        $req="select * from pack join utilisateur on pack.idfoyer=utilisateur.idfoyer where utilisateur.idutilisateur=".$idu;
        $e=$this->get($req);
        return $e[0]['idfoyer'];
    }
    public function getConsommationGen($idu){
        $foyer=$this->getHisFoyer($idu);
        $mainReq="select consommationJour.* from produit";
        $join0=" join consommationJour on produit.idproduit=consommationJour.idproduit";
        $join1=" join pack on produit.idpack=pack.idpack";
        $where=" where pack.idfoyer=".$foyer;
        $req=$mainReq.$join0.$join1.$where;
        return $this->get($req);
    }
    public function getHelp($idhelp){
        if($idhelp==1){
            $titre="";
        }
    }

}