<?php 
defined('BASEPATH') or exit('No direct script access allowed');	//protection fichier
class Debut extends CI_Controller {
    public function premierepage(){
        $this->load->view('first');
    }


}

?>