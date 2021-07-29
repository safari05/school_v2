<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attendance extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function pushAttandance(){

        $companyId = $this->input->post('companyid');
        $data = $this->input->post('data');

        if($companyId != '' && $data != ''){
            echo "1";

        }else{
            echo "0";
        }
    }
}