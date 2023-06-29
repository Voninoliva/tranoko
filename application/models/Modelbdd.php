<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
class Modelbdd extends CI_Model 
{
    public function getinscrit()
    {
        $array=array();
        $array=$this->db->get('actor');
        return $array;
    }
}

?>