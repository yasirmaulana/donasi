<?php

class Laporan extends Controller {

    public function index()
    {
        $this->view('templates/header-order');
        $this->view('laporan/index', $data);
        $this->view('templates/footer');
    }
}