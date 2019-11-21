<?php

class Feedback extends Controller {

    public function index()
    {
        // var_dump($_POST);
        if( $this->model('Feedback_model')->inputInbox($_POST) > 0 ) {
            header('Location: ' . BASEURL . '/home/allCampaign' );
            exit();
        } else {
            echo "gagal input";
        } 
    }

}