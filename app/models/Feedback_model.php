<?php

class Feedback_model {
    private $table = 'crm_inbox';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function inputInbox($data)
    {
        $query = "INSERT INTO crm_inbox(nama, no_wa, email, pesan) VALUES (:nama, :no_wa, :email, :pesan) ";

        $this->db-query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('no_wa', $data['no_wa']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pesan', $data['pesan']);
    
        $this->db->execute();

        return $this->db->rowCount();

    }

}