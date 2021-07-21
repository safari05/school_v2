<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Exceptionpage extends Admin_Controller {

    /*
        | -----------------------------------------------------
        | PRODUCT NAME: 	Sistem Informasi Sekolah
        | -----------------------------------------------------
        | AUTHOR:			safari
        | -----------------------------------------------------
        | EMAIL:			safari.erie@gmail.com
        | -----------------------------------------------------
        | COPYRIGHT:		DKM
        | -----------------------------------------------------
        | WEBSITE:			
        | -----------------------------------------------------
	*/
    public function __construct()
    {
        parent::__construct();
        $language = $this->session->userdata('lang');
        $this->lang->load('exceptionpage', $language);
    }

    public function index()
    {
        $this->data["subview"] = "exceptionpage/index";
        $this->load->view('_layout_main', $this->data);
    }

    public function error()
    {
        $this->data["subview"] = "errorpermission";
        $this->load->view('_layout_main', $this->data);
    }
}