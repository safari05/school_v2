<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration extends Admin_Controller {

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
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->library('migration');

		if ( ! $this->migration->current())
		{
			show_error($this->migration->error_string());
		} else {
			echo "success";
		}
	}

}

/* End of file migration.php */
/* Location: .//D/xampp/htdocs/school/mvc/controllers/migration.php */