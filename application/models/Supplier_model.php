<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model {
    public function removedatabyidfromdatabase($companyid, $id, $table) {
        $companyid = "database".$companyid;
        $this->db->query('use '.$companyid);

        $data = array(
            'isremoved'=>TRUE
        );

        $this->db->where('id', $id);
        $res=$this->db->update($table, $data);
        return $res;
    }

    public function createStock($companyid, $name, $code) {
        $companyid = "database".$companyid;
        $this->db->query('use '.$companyid);

        $data = array(
            'name'=>$name, 
            'code'=>$code, 
        );

        $this->db->insert('stock', $data);
        $product_id = $this->db->insert_id();
        return $product_id;
    }

    public function saveStock($companyid, $id, $name, $code) {
        $companyid = "database".$companyid;
        $this->db->query('use '.$companyid);

        $data = array(
            'name'=>$name, 
            'code'=>$code, 
        );

        $this->db->where('id', $id);
        $res=$this->db->update('stock', $data);
        return $res;
    }

    public function createProduct($companyid, $supplierid, $observation, $lines) {
        $companyid = "database".$companyid;
        $this->db->query('use '.$companyid);

        $data = array(
            'supplierid'=>$supplierid, 
            'observation'=>$observation, 
            'lines'=>$lines, 
        );

        $this->db->insert('product', $data);
        $product_id = $this->db->insert_id();
        return $product_id;
    }

    public function saveProduct($companyid, $id, $supplierid, $observation, $lines) {
        $companyid = "database".$companyid;
        $this->db->query('use '.$companyid);

        $data = array(
            'supplierid'=>$supplierid, 
            'observation'=>$observation, 
            'lines'=>$lines, 
        );

        $this->db->where('id', $id);
        $res=$this->db->update('product', $data);
        return $res;
    }
    //get date_of_reception, product_number, received_with_document for invoice
    public function productfromsetting($companyid, $table) {
        $companyid = "database".$companyid;
        $this->db->query('use '.$companyid);

        $query = "SELECT `AUTO_INCREMENT`
            FROM information_schema.TABLES 
            WHERE TABLE_SCHEMA = '" . $companyid . "' AND TABLE_NAME = '$table'";

        $queryvalue = $this->db->query($query)->result_array();

        $data['date_of_reception'] = date("Y-m-d");
        $data['product_number'] = $queryvalue[0]['AUTO_INCREMENT'];
        $data['received_with_document'] = $queryvalue[0]['AUTO_INCREMENT'];

        return $data;
    }
}