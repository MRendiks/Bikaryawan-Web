<?php

class ModelEnkripsi extends CI_Model
{
    public function getEmptyFileUrl(){
        $this->db->where('file_url', '');
        return $this->db->get('file')->result_array();
    }

	public function insertFile($data){
        $this->db->insert('file', $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }

    public function updateFileUrl($url){
        $this->db->where('file_url', '');
        return $this->db->update('file', $url);
    }

    public function getFileData($table){
        return $this->db->get($table);
    }
}
