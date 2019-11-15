<?php

class Transaksi_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getProspekDonaturByPhone($phone)
    {
        $this->db->query('SELECT * FROM portal_crm_prospek_donatur WHERE hp=:hp ');
        $this->db->bind('hp', $phone);
        return $this->db->single();
    }

    public function tambahProspekDonatur($data)
    {
        $query = "INSERT INTO portal_crm_prospek_donatur(nama, hp, email) value (:nama, :hp, :email) ";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('hp', $data['no_wa']);
        $this->db->bind('email', $data['email']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tambahKonfirmasiDonasi($data)
    {
        $query = "INSERT INTO portal_crm_konfirmasi_donasi(donatur_id, nominal, donasi_id, kode_transaksi) 
                    value (:donatur_id, :nominal, :donasi_id, :kode_transaksi) ";

        $this->db->query($query);
        $this->db->bind('donatur_id', $data['donatur_id']);
        $this->db->bind('nominal', $data['gross_amount']);
        $this->db->bind('donasi_id', $data['donasiId']);
        $this->db->bind('kode_transaksi', $data['kodeDonasi']);

        $this->db->execute();

        return $this->db->rowCount();
    }

}