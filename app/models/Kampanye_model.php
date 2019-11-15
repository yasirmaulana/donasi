<?php

class Kampanye_model {
    private $table = 'V_KAMPANYE';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    } 

    public function getAllCampaign()
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE status = 'A' ");
        return $this->db->resultSet();
    }

    public function getCampaign($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE donasi_id=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}