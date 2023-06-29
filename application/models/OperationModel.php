<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class OperationModel extends CI_Model {
    
    public function insert_gen($table, $data) {
        $insert = $this->db->insert($table, $data);
        // $id = $this->db->insert_id();
        echo $insert;
        return $insert;
    }
    public function update_gen($table, $data, $where) {
        $this->db->where($where);
        $this->db->update($table, $data);
        return $this->db->affected_rows();
    }
   
    public function select_gen($table, $columns = "*", $where = NULL, $order_by = NULL, $limit = NULL, $offset = NULL) {
        $this->db->select($columns);
        $this->db->from($table);
    
        if ($where) {
            $this->db->where($where);
        }
    
        if ($order_by) {
            $this->db->order_by($order_by);
        }
    
        if ($limit) {
            if ($offset) {
                $this->db->limit($limit, $offset);
            } else {
                $this->db->limit($limit);
            }
        }
    
        $query = $this->db->get();
        return $query->result();
    }

    public function delete_gen($table, $where) {
        $this->db->where($where);
        $this->db->delete($table);
        return $this->db->affected_rows() > 0;
    }



}