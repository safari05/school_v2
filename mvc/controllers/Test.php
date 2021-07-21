<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends Admin_Controller {
// class Test extends CI_Controller {

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
		if(config_item('demo') == FALSE || ENVIRONMENT == 'production') {
			redirect('dashboard/index');
		}
	}

	public function index()
    {
        $this->load->model('teacherclasses_m');
        dump($this->teacherclasses_m->teacherClass());

	}
}
