<?php

class Transaksi extends Controller {
    public function index($id, $kanal = null)
    {
        $data['kampanye'] = $this->model('Kampanye_model')->getCampaign($id);
        $data['kanal'] = $kanal;

        $this->view('templates/header-order');
        $this->view('transaksi/order', $data);
        $this->view('templates/footer2');
    }

    public function tambahTransaksiDonasi()
    {
        $data['transaksi'] = $_POST;
        $data['pros-don'] = $this->model('Transaksi_model')->getProspekDonaturByPhone($_POST['no_wa']);
        $hpDb = $data['pros-don']['hp'];
        $idDb = $data['pros-don']['id'];
        $_POST['donatur_id'] = $idDb;
        
        if ( $hpDb == '') {
            // tambah prospek-danatur
            $this->model('Transaksi_model')->tambahProspekDonatur($_POST);
        
            // ambil id prospek-donatur
            $data['pros-don'] = $this->model('Transaksi_model')->getProspekDonaturByPhone($_POST['no_wa']);
            $idDb = $data['pros-don']['id'];
            $_POST['donatur_id'] = $idDb;

            // tambah konfirmasi donasi
            $this->model('Transaksi_model')->tambahKonfirmasiDonasi($_POST);

        } else {
            // $data['Ada'] = $hpDb;
            $this->model('Transaksi_model')->tambahKonfirmasiDonasi($_POST);
        }

        $this->view('templates/header-order');
        $this->view('transaksi/terimakasih', $data);
    }

    public function kontakAdmin()
    {
        $this->view('transaksi/kontakadmin');
    }

}