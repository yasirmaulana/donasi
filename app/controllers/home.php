<?php

class Home extends Controller {
    public function index()
    {
        $data['kampanye'] = $this->model('Kampanye_model')->getAllCampaign();

        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    // public function formOrder($id)
    // {
    //     $data['kampanye'] = $this->model('Kampanye_model')->getCampaign($id);

    //     $this->view('templates/header-order');
    //     $this->view('home/order', $data);
    //     $this->view('templates/footer');
    // }

    public function login()
    {

        $data['user']   = $this->model('User_model')->getUserByLogin($_POST);
        $passIn         = $_POST['password'];
        $passOut        = $data['user']['password0'];
        
        if (password_verify($passIn, $passOut)) {
            // set session
			$_SESSION['login'] = true;
			$_SESSION['akses'] = $data['user']['aktif'];
			$_SESSION['id'] = $data['user']['id'];
			$_SESSION['username'] = $data['user']['user_name'];
            
            $id = $data['user']['user_name'];
            $menu['Master'] = $this->model('Menu_model')->getMenuMaster($id);

            $this->view('templates/header-adminlte', $menu);
            $this->view('home/dashboard');
            $this->view('templates/footer');
        
        } else {
            $this->view('templates/header-signin');
            $this->view('home/index');
            $this->view('templates/footer');
        }

    }
    
}