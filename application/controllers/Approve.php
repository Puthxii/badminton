<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Approve extends BD_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->isLoggedIn();
	}

	public function index()
	{
        $this->load->view('admin/layout/head');
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/left-menu');
		$this->load->view('admin/competition/content');
		$this->load->view('admin/layout/footer');
		$this->load->view('admin/layout/foot');	
	}

}
